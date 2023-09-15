<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Icon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
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
        $datas = Location::where([
            ['tribes', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tribes', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.locations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = Location::where([
            ['tribes', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tribes', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.locations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = Location::onlyTrashed()->paginate(5);
        return view('dashboard.locations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        $icons = Icon::all();
        return view('dashboard.locations.create',compact('icons'));
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'tribes' => 'required',

            ],
            [
                'tribes.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Location();
                $data->tribes = $request->tribes;
                $data->slug = Str::slug($data->tribes);
                $data->desc = $request->desc;
                $data->long = $request->long;
                $data->lat = $request->lat;
                $data->link = $request->link;
                $data->icon_id = $request->icon;
                $data->status = $request->status;
                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/locations/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Location::where('id', $id)->first();
        return view('dashboard.locations.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Location::where('id', $id)->first();
        $icons = Icon::all();
        return view('dashboard.locations.edit', compact('data','icons'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'tribes' => 'required',
            ],
            [
                'tribes.required' => 'This is a reaquired field',

            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Location::find($id);

                $data->tribes = $request->tribes;
                $data->slug = Str::slug($data->tribes);
                $data->desc = $request->desc;
                $data->long = $request->long;
                $data->lat = $request->lat;
                $data->link = $request->link;
                $data->icon_id = $request->icon;
                $data->status = $request->status;

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/locations/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = Location::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.plants.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Location::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Location::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
