<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = Role::create(['name'=>'superAdmin']);
        $user = User::where('email', 'jahidiu21111@gmail.com')->first();
        if (is_null($user)) {

            $user = new User();
            $user->name = 'Jahidul Islam';
            $user->email = 'jahidiu21111@gmail.com';
            $user->email_verified_at = now();
            $user->phone = '01745878754';
            $user->type = 1;
            $user->password = Hash::make('password');
            $user->save();
            $user->assignRole($roleSuperAdmin);


            $user = new User();
            $user->name = 'Md. Imdadul Haque';
            $user->email = 'emdadulhq@gmail.com';
            $user->email_verified_at = now();
            $user->phone = '01922581040';
            $user->type = 1;
            $user->password = Hash::make('password');
            $user->save();
            $user->assignRole($roleSuperAdmin);


            $user = new User();
            $user->name = 'Sakib Apon';
            $user->email = 'sakibapon70@gmail.com';
            $user->email_verified_at = now();
            $user->phone = '01951445484';
            $user->type = 1;
            $user->password = Hash::make('password');
            $user->save();
            $user->assignRole($roleSuperAdmin);
        }
    }
}
