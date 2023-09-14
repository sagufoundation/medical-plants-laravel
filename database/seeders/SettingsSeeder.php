<?php

namespace Database\Seeders;

use App\Models\Settings;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            
            /*
            | GLOBAL SETTINGS
            |
            */
            // Site Information
            'id' => 1,
            'site_title' => 'Dashboard GOTRAVPAPUA.COM',
            'copyright' => "2023, GOTRAVPAPUA.com - All Rights Reserved | <a href='https://gotravpapua.com/' target='_blank'>www.gotravpapua.com</a>",
            
    // Metas
    'meta_tags' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the beauty of Papua, Indonesia with our exciting tour packages, adventurous activities, and stunning destinations. Join us for unforgettable events and experiences.">
    <meta name="keywords" content="Papua travel, Indonesia tours, adventure trips, Papua destinations, travel events">
    <meta name="author" content="GOTRAVPAPUA.COM">',

            // Contact
            'site_address' => "https://admin@gotravpapua.com/",
            'email_address' => "hello@admin@gotravpapua.com",
            'telephone' => "085243800061",
            'office_address' => "Jl.Eunike Mawene Kimi, Nabire Tengah, Papua Tengah.",
            'google_map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8133512.942749398!2d135.6083135923328!3d-5.501216729418526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x684a0316a5130283%3A0xf0d0324058e7ea8!2sNew%20Guinea!5e0!3m2!1sen!2sid!4v1693062291541!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
            // logo
            'logo' => 'images/settings/logo-panel.png',
            'logo_loader' => 'images/settings/logo-loader.png',
            'logo_meta' => 'https://gotravpapua.com/assets/images/pre-load-gotrav.png',
            'logo_favicon' => 'favicon.png',
            
            // Social Media
            'instagram' => "https://instagram.com/",
            'facebook' => "https://facebook.com/",
            'twitter' => "https://twitter.com/",
            'tiktok' => "https://tiktok.com/",
            'linkedin' => "https://linkedin.com/",
            'youtube' => "https://www.youtube.com/",
                        
            /*
            | DASHBOARD SETTINGS
            |
            */
            
            'logo_dashboard_lg_dark' => 'images/settings/logo_lg_dark.png',
            'logo_dashboard_sm_dark' => 'images/settings/logo_sm_dark.png',
            'logo_dashboard_lg_light' => 'images/settings/logo_lg_light.png',
            'logo_dashboard_sm_light' => 'images/settings/logo_sm_light.png',

            // Dates
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
