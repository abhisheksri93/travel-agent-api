<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormSeries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                "id" => 1,
                "form" => "file",
                "series" => 1,
            ],
            [
                "id" => 2,
                "form" => "booking",
                "series" => 1000,
            ],
        ];

        foreach ($admin as $val)
            \App\Models\FormSeries::create($val);
    }
}
