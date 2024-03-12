<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tribes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TribesController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | adventures
    | index | publish, draft, trash, create, store, show, edit, update, destroy, restore, delete
    |--------------------------------------------------------------------------
    */

    // index | publish

    public function index(Request $request)
    {
        $datas = Tribes::where([
            ['tribe_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tribe_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.tribes.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = Tribes::where([
            ['tribe_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tribe_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.tribes.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = Tribes::onlyTrashed()->paginate(5);
        return view('dashboard.tribes.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.tribes.create');
    }

    // store
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'tribe_name' => 'required',
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
                $data = new Tribes();
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
                return redirect('dashboard/regencies');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Tribes::where('id', $id)->first();
        return view('dashboard.tribes.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Tribes::where('id', $id)->first();

        return view('dashboard.tribes.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'tribe_name' => 'required',
            ],
            [
                'name.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Tribes::find($id);

                $data->name = $request->name;
                $data->status = $request->status;
                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/regencies');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = Tribes::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.tribes.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Tribes::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Tribes::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}

