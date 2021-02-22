<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'=>'Ambarish',
            'last_name'=>'Das',
            'city'=>'Gazipur',
            'street'=>'Pubail',
            'org_name'=>'Kodeeo',
            'phone_no'=>'01724938906',
            'email'=>'ambarishdas1610@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token'=>Str::random(10),
        ]);
    }
}
