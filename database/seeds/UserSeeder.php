<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'first_name'=> 'admin',
        'last_name'=> 'system',
        'dni'=> '123456',
        'email'=> 'admin@admin.com',
        'phone'=> '123-123-123',
        'address'=> 'Admin 123',
        'password'=> 'administrator',
        'cuit' => '123456',
        'agronomy'=> 'test',
        'agronomy_type' => 'casa',
        'birthday' => null,
        'size' => null,
        'civil_status' => null,
        'aniversario' => null,
        'childrens' => null,
        'sports' => null,
        'hobby' => null,
        'team' => null,
        'type' => 'admin',
        ]);
    }
  }
