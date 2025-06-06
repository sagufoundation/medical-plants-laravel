<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Icon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class IconController extends Controller
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
        $datas = Icon::where([
            ['icon_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('icon_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.icons.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = Icon::where([
            ['icon_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('icon_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.icons.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = Icon::onlyTrashed()->paginate(5);
        return view('dashboard.icons.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.icons.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'icon_name' => 'required',
                'icon_img' => 'image|mimes:png,jpeg,jpg|max:4096',

            ],
            [
                'icon_name.required' => 'This is a reaquired field',
                'icon_img.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Icon();
                $data->icon_name = $request->icon_name;
                $data->status = $request->status;

                if ($request->icon_img) {
                    $pictureName = Str::slug($data->icon_name) .'-'. time() .'.' . $request->icon_img->extension();
                    $path = public_path('assets/img/icon');
                    if (!empty($data->icon_img) && file_exists($path . '/' . $data->icon_img)) :
                        unlink($path . '/' . $data->icon_img);
                    endif;
                    $data->icon_img = 'assets/img/icon/' . $pictureName;
                    $request->icon_img->move(public_path('assets/img/icon'), $pictureName);
                }
                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/icons/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Icon::where('id', $id)->first();
        return view('dashboard.icons.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Icon::where('id', $id)->first();

        return view('dashboard.icons.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'icon_name' => 'required',
                'icon_img' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'icon_name.required' => 'This is a reaquired field',
                'icon_img.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Icon::find($id);

                $data->icon_name = $request->icon_name;
                $data->status = $request->status;

                if ($request->icon_img) {
                    $pictureName = Str::slug($data->icon_name) .'-'. time() .'.' . $request->icon_img->extension();
                    $path = public_path('assets/img/icon');
                    if (!empty($data->icon_img) && file_exists($path . '/' . $data->icon_img)) :
                        unlink($path . '/' . $data->icon_img);
                    endif;
                    $data->icon_img = 'assets/img/icon/' . $pictureName;
                    $request->icon_img->move(public_path('assets/img/icon'), $pictureName);
                }
                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/icons/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = Icon::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.icons.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Icon::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Icon::onlyTrashed()->findOrFail($id);
        $path = public_path('assets/img/icon/' . $data->icon_img);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}

