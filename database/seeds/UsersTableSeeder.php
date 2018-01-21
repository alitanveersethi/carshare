<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $superadmin=new User();
          $superadmin->name='ali tanveer';
          $superadmin->email='ali_sethi53@yahoo.com';
          $superadmin->password=bcrypt('4april1995');
          $superadmin->cnic='3420289091047';
          $superadmin->cell_no='03204630012';
          $superadmin->role='superAdmin';
        $superadmin->save();






        $admin=new User();
        $admin->name='ali sethi';
        $admin->email='alitanveer458@gmail.com';
        $admin->password=bcrypt('4april1995');
        $admin->cnic='3420289091047';
        $admin->cell_no='03204630012';
        $admin->role='Admin';
        $admin->save();





        $user=new User();
        $user->name='ali aqdas';
        $user->email='alisethi123@outlook.com';
        $user->password=bcrypt('4april1995');
        $user->cnic='3420289091047';
        $user->cell_no='03204630012';
        $user->role='user';
        $user->save();




    }


}
