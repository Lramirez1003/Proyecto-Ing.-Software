<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('Nombre','admin')->first();
        $customerRole=Role::where('Nombre','customer')->first();

        $admin = User::create([
            'name'=>'Soy admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('admin'),
            'cedula'=>'111-1111111-1'
        ]);
        $customer = User::create([
            'name'=>'Soy cliente',
            'email'=>'customer@customer.com',
            'password'=>Hash::make('admin'),
            'cedula'=>'111-1111112-1'
        ]);

        $admin->roles()->attach($adminRole);
        $customer->roles()->attach($customerRole);
    }
}
