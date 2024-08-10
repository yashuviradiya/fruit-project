<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'address' => '1429 Netus Rd, NY 48247',
            'shortaddress' => '123 Street, New York',
            'email' => 'Example@gmail.com',
            'phonenumber' => '+0123 4567 8910',
            'twitter' => '@justinbieber',
            'facebook' => '@justinbieber',
            'linkdin' => '@justinbieber',
            'youtube' => '@justinbieber',
        ]);
    }
}
