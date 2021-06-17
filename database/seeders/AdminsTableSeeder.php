<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('admin');
        $admin->username = 'admin';
        $admin->save();
    }
}
