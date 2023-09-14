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
                $random = Str::random(15);
                $Settings = Settings::first();

                // site informations
                $Settings->site_title = $request->site_title;
                $Settings->site_address = $request->site_address;
                $Settings->copyright = $request->copyright;

                // meta tags
                $Settings->meta_tags = $request->meta_tags;

                // social media
                $Settings->instagram = $request->instagram;
                $Settings->facebook = $request->facebook;
                $Settings->twitter = $request->twitter;
                $Settings->linkedin = $request->linkedin;
                $Settings->youtube = $request->youtube;

                // contact
                $Settings->office_address = $request->office_address;
                $Settings->email_address = $request->email_address;
                $Settings->telephone = $request->telephone;
                $Settings->google_map_embed = $request->google_map_embed;

                

                $Settings->update();

                Alert::toast('Settings has been updated successfully', 'success');

                if(!empty($request->inputGroup)) {
                    return redirect('dashboard/Settings/' . $request->inputGroup);
                } else {
                    return redirect()->route('dashboard.settings');
                }


            } catch (\Throwable $th) {

                dd($th);
                Alert::toast('Failed', 'error');
                return redirect()->back();

            }
        }
    }

}
