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

             // VISITOR
            // Site Information
            'site_title'        => 'Traditional Medicinal Plants in Papua',
            'site_description'  => 'Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.',

            'welcome_text'  => 'Welcome to the Database of Traditional Medicinal Plants in Papua, a comprehensive and easily accessible resource for researchers, healthcare practitioners, and anyone interested in traditional medicine, aiming to promote the importance of preserving traditional medicinal knowledge and exploring it for global medicinal research.',

            'logo'              => 'assets/img/logo.png',
            'logo_loader'       => 'assets/img/loader.png',
            'favicon'           => 'assets/img/favicon.png',

            // Contact
            'email_address'      => "https://medicinalplantspapua.org",
            'telp'                  => "0967 1234 5678",
            'office_address'     => "Office address here",
            'google_map_address' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15943.319688111145!2d140.67285368715824!3d-2.5621025999999847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c593ecebe80db%3A0x3befb8abcc818c9!2sDinas%20Lingkungan%20Hidup%20Kota%20Jayapura!5e0!3m2!1sen!2sid!4v1683468075044!5m2!1sen!2sid",

            // Social Media
            'instagram'         => "https://instagram.com/medicinalplantspapua",
            'facebook'          => "https://facebook.com/medicinalplantspapua",
            'twitter'           => "https://twitter.com/medicinalplantspapua",
            'tiktok'            => "https://tiktok.com/medicinalplantspapua",
            'linkedin'          => "https://linkedin.com/medicinalplantspapua",
            'youtube'           => "https://www.youtube.com/@medicinalplantspapua",

            // Copyright
            'copyright'         => '<p>© 2023 <a href="https://medicinalplantspapua.org/" class="hover:underline">Traditional Medicinal Plants in Papua™</a>. All Rights Reserved.</p>',


            // Dates
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
    }
}
