<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegencyController extends Controller
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

    // draft
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

    // trash
    public function trash()
    {
        //
        $datas = Regency::onlyTrashed()->paginate(5);
        return view('dashboard.regencies.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.regencies.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Province();
                $data->name = $request->name;
                $data->status = $request->status;

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/provinces');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Regency::where('id', $id)->first();
        return view('dashboard.regencies.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Regency::where('id', $id)->first();

        return view('dashboard.regencies.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Regency::find($id);

                $data->name = $request->name;
                $data->status = $request->status;
                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/provinces');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = Regency::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.regencies.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Regency::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Regency::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}

