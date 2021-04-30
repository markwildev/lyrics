<?php

use App\Laravel\Models\User;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'name' => "Super User", 
            'status' => 'active',
            'email' => "admin@gmail.com", 
            'username' => "admin",
            'type' => "super_user",
        ]);

        $user->password = bcrypt("admin");
        $user->save();
    }
}
