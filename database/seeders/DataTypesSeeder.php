<?php

namespace Database\Seeders;

use App\Models\dataTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dataTypes::create([
            'type' => 'String',
            'string_flag' => '1',

        ]);
        dataTypes::create([
            'type' => 'Integer',
            'int_flag' => '1',

        ]);
        dataTypes::create([
            'type' => 'Float',
            'float_flag' => '1',

        ]);
        dataTypes::create([
            'type' => 'Date',
            'date_flag' => '1',

        ]);
    }
}
