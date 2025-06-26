<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_infos')->insert([
            'name' => 'Afro Xtreme Technologies',
            'tagline' => 'Innovate. Educate. Empower.',
            'logo' => 'afroxtreme.png',
            'email' => 'info@afroxta.com',
            'phone' => '+23412345678',
            'website' => 'https://afroxta.com',
            'address' => '123 Afro Street, Lagos',
            'city' => 'Lagos',
            'state' => 'Lagos',
            'country' => 'Nigeria',
        ]);
    }
}
