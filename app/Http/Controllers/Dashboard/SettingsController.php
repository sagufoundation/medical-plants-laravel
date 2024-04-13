<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    // INDEX
    public function index()
    {

        $data = Settings::whereId(1)->first();
        return view('dashboard.settings.index', compact('data'));
    }

    // EDIT
    public function edit()
    {

        $data = Settings::whereId(1)->first();
        return view('dashboard.settings.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                // 'judul_situs' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                
                $data = Settings::find(1);

                // $data = Settings::first();

                // site informations
                $data->site_title = $request->site_title;
                // $data->site_address = $request->site_address;
                $data->copyright = $request->copyright;

                // // meta tags
                $data->meta_tags = $request->meta_tags;

                // // social media
                $data->instagram = $request->instagram;
                $data->facebook = $request->facebook;
                $data->twitter = $request->twitter;
                $data->linkedin = $request->linkedin;
                $data->youtube = $request->youtube;

                // // contact
                $data->email_address = $request->email_address;
                $data->telp = $request->telp;
                $data->office_address = $request->office_address;
                $data->google_map_embed = $request->google_map_embed;

                

                $data->update();

                alert()->success('Data Updated', 'Your data has been successfully updated and saved.')->autoclose(3000);
                return to_route('dashboard.settings');


            } catch (\Throwable $th) {
                dd($validator);
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
                return redirect()->back();

            }
        }
    }

}
