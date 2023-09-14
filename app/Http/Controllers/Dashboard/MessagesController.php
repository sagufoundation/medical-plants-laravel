<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourMessages;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | sliders
    | index | publish, draft, trash, create, store, show, edit, update, destroy, restore, delete
    |--------------------------------------------------------------------------
    */

    // index | publish

    public function index(Request $request)
    {
        $datas = TourMessages::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('message', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->latest('id')->paginate(5);

        return view('dashboard.messages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        // now draft view from admin panel
    }

    // trash
    public function trash()
    {
        //
        $datas = TourMessages::onlyTrashed()->paginate(5);
        return view('dashboard.messages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        // no create from admin panel
    }

    // store
    public function store(Request $request)
    {
        // no store function from admin panel
    }

    // show
    public function show($id)
    {
        $data = TourMessages::where('id', $id)->first();
        return view('dashboard.messages.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        // no edit view from admin panel
    }

    // update
    public function update(Request $request, $id)
    {

        // no update function from admin panel
    }

    // destroy
    public function destroy($id)
    {
        $data = TourMessages::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.messages.trash');
    }

    // restore
    public function restore($id)
    {
        $data = TourMessages::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = TourMessages::onlyTrashed()->findOrFail($id);
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
