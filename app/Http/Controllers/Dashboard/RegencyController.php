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
            ],
            [
                'name.required' => 'This is a reaquired field',
                'coordinates.required' => 'This is a reaquired field',
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

                if ($request->image) {
                    $imageName = $data->slug .'.' . $request->image->extension();
                    $path = public_path('images/regencies');
                    
                    if (!empty($data->image) && file_exists($path . '/' . $data->image)) :
                        unlink($path . '/' . $data->image);
                    endif;

                    $data->image = $imageName;
                    $request->image->move(public_path('images/regencies'), $imageName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return to_route('dashboard.regencies');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
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
        $data = Regency::where('id', $id)->first();
        return view('dashboard.regencies.show', compact('data'));
    }

    /*
    | EDIT
    | showing edit page with the form and inputs
    */ 
    public function edit($id)
    {
        $data = Regency::where('id', $id)->first();

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
            ],
            [
                'name.required' => 'This is a reaquired field',
                'coordinates.required' => 'This is a reaquired field',
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

                if ($request->image) {
                    $imageName = $data->slug .'.' . $request->image->extension();
                    $path = public_path('images/regencies');
                    
                    if (!empty($data->image) && file_exists($path . '/' . $data->image)) :
                        unlink($path . '/' . $data->image);
                    endif;

                    $data->image = $imageName;
                    $request->image->move(public_path('images/regencies'), $imageName);
                }

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect()->back();

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
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
        $data = Regency::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.regencies.trash');
    }

    /*
    | RESTORE
    | restoring data from soft delete
    */ 
    public function restore($id)
    {
        $data = Regency::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
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

