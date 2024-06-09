<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $users = [
                [
                  'nombres' => "Juan Manuel",
                  'ap_paterno' => "Ubillus",
                  'ap_materno' => "Rivera",
                  'email' => "juan.ubillusr@gmail.com",
                  'tipo_doc'=> '01',
                  'numero_doc'=> '71269685',
                  'password' =>Hash::make("123"),
                ],
                [
                    'nombres' => "German",
                    'ap_paterno' => "Maco",
                    'ap_materno' => "Melgarejo",
                    'email' => "german@gmail.com",
                    'tipo_doc'=> '01',
                    'numero_doc'=> '71258574',
                    'password' =>Hash::make("123"),
                ],
                [
                    'nombres' => "Betzabe",
                    'ap_paterno' => "Vega",
                    'ap_materno' => "Aliaga",
                    'email' => "betza@gmail.com",
                    'tipo_doc'=> '01',
                    'numero_doc'=> '72585475',
                    'password' =>Hash::make("123"),
                ],
                [
                    'nombres' => "Angel",
                    'ap_paterno' => "Ciriaco",
                    'ap_materno' => "Atahua",
                    'email' => "angel@gmail.com",
                    'tipo_doc'=> '01',
                    'numero_doc'=> '75854585',
                    'password' =>Hash::make("123"),
                ],
                [
                    'nombres' => "Hans",
                    'ap_paterno' => "Palacios",
                    'ap_materno' => "Salvatierra",
                    'email' => "hans@gmail.com",
                    'tipo_doc'=> '01',
                    'numero_doc'=> '78545585',
                    'password' =>Hash::make("123"),
                ],[
                    'nombres' => "Manuel Alejandro",
                    'ap_paterno' => "Ortiz",
                    'ap_materno' => "Piñella",
                    'email' => "mortiz19@autonoma.edu.pe",
                    'tipo_doc'=> '01',
                    'numero_doc'=> '75258568',
                    'password' =>Hash::make("123"),
                ],
            ];
            User::insert($users);
        }
    }
}
