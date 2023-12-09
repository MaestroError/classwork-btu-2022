<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer')->insert([
            'email'        => "gchakhidze@btu.edu.ge",
            'address' => "chavchavadze 82",
            'about us'       => "btu uni student",
            'phone'      => 599999999
        ]);
    }
}