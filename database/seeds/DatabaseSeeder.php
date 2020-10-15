<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $admin = new User();
        $admin->name="admin";
        $admin->email="admin@gmail.com";
        $admin->password =  bcrypt('123456');
        $admin->visible_password ="123456";
        $admin->email_verified_at = Carbon::now();
        $admin->occupation="CEO";
        $admin->address="Palestine";
        $admin->phone="059723824";
        $admin->is_admin=1;
        $admin->save();
    }
}
