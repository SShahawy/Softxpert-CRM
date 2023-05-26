<?php

namespace Database\Seeders;

use App\Models\dataTypes;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$XOpvMCmc/Cpu8nUts5PyROWs.PYlxIhJCoS/I4CR3YgyUetccMg2S',
            'role' => '1',

        ]);
        User::create([
            'name' => 'Operator',
            'email' => 'op@op.com',
            'password' => '$2y$10$XOpvMCmc/Cpu8nUts5PyROWs.PYlxIhJCoS/I4CR3YgyUetccMg2S',
            'role' => '0',

        ]);
    }
}
