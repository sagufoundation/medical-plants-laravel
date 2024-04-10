<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RegencyController extends Controller
{
    /*
    | INDEX
    | showing table data of published records or "status=publish"
    */ 
    public function index(Request $request)
    {
        $datas = Regency::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.regencies.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | DRAFT
    | showing table with data of drafted records "status=trash"
    */ 
    public function draft(Request $request)
    {
        $datas = Regency::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.regencies.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | TRASH
    | showing table with data of soft deleted records "softDelete=true"
    */ 
    public function trash()
    {
        //
        $datas = Regency::onlyTrashed()->paginate(5);
        return view('dashboard.regencies.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | CREATE
    | showing create page with the form and inputs
    */ 
    public function create()
    {
        return view('dashboard.regencies.create');
    }

    /*
    | STORE
    | storing data to database 
    */ 
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'coordinates' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Regency();
                $data->name = $request->name;
                $data->slug = Str::slug($data->name);
                $data->coordinates = $request->coordinates;
                $data->description = $request->description;
                $data->status = $request->status;

                // picture creation
                if (isset($request->image)) {

                    // create file name
                    $fileName = Str::slug($data->name) .'-'. time() .'.' . $request->image->extension();

                    // create file path
                    $path = public_path('images/regencies/' . $data->image);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->image = $fileName;

                    // move file into folder path with the file name
                    $request->image->move(public_path('images/regencies'), $fileName);
                }

                $data->save();

                alert()->success('Success!', 'Your new entry has been created and added to the system.')->autoclose(3000);
                return to_route('dashboard.regencies');

            } catch (\Throwable $th) {
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
                return redirect()->back();
            }
        }
    }

    /*
    | SHOW
    | showing detail data 
    */ 
    public function show($id)
    {
        $data = Regency::find($id);
        return view('dashboard.regencies.show', compact('data'));
    }

    /*
    | EDIT
    | showing edit page with the form and inputs
    */ 
    public function edit($id)
    {
        $data = Regency::find($id);
        return view('dashboard.regencies.edit', compact('data'));
    }

    /*
    | UPDATE
    | updating data 
    */ 
    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'coordinates' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Regency::find($id);

                $data->name = $request->name;
                $data->slug = Str::slug($data->name);
                $data->coordinates = $request->coordinates;
                $data->description = $request->description;
                $data->status = $request->status;

                // picture creation
                if (isset($request->image)) {

                    // create file name
                    $fileName = Str::slug($data->name) .'-'. time() .'.' . $request->image->extension();

                    // create file path
                    $path = public_path('images/regencies/' . $data->image);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->image = $fileName;

                    // move file into folder path with the file name
                    $request->image->move(public_path('images/regencies'), $fileName);
                }

                $data->update();

                alert()->success('Data Updated', 'Your data has been successfully updated and saved.')->autoclose(3000);
                return redirect()->back();

            } catch (\Throwable $th) {
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
                return redirect()->back();
            }
        }
    }

    /*
    | DESTROY
    | deleting data softly
    */ 
    public function destroy($id)
    {
        $data = Regency::findOrFail($id);
        $data->delete();

        alert()->success('Moved to Trash', 'Your data has been moved to the trash. It can be recovered if needed')->autoclose(3000);
        return to_route('dashboard.regencies.trash');
    }

    /*
    | RESTORE
    | restoring data from soft delete
    */ 
    public function restore($id)
    {        
        Regency::withTrashed()->where('id',$id)->restore();

        alert()->success('Data Restored', 'Your data has been successfully restored from the trash. It is now available for use again')->autoclose(3000);
        return redirect()->back();
    }

    /*
    | DELETE
    | deleting permanently
    */ 
    public function delete($id)
    {
        $data = Regency::onlyTrashed()->findOrFail($id);
        $path = public_path('images/regencies/' . $data->image);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();

        alert()->success('Deleted permanently', 'our data has been permanently deleted from the system. This action cannot be undone')->autoclose(3000);
        return redirect()->back();
    }
}

