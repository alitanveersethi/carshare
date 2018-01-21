<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

 public function show()
    {

        $user['users']=DB::table('users')->get();
        if (count($user)>0){

            return view('superadmin.viewuser',$user);
        }
else{


            return view('superadmin.viewuser');


}



    }

    public function userRole($id){
        // $userf=new User();
        $userfound=User::find($id);
        //dd($user);
        if($userfound->role=="superAdmin")
        {
            return redirect('/viewuser');
        }
        if($userfound->role=="user"){
            $userfound->role="Admin";
            $userfound->save();

            return redirect('/viewuser');
            //dd($userfound);
        }
        elseif($userfound->role=="Admin"){
            $userfound->role="user";
            $userfound->save();

            return redirect('/viewuser');

        }
        // dd($data);
        return redirect('display');
    }






}
