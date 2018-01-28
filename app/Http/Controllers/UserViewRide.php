<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\addride;
use App\query;
use Auth;
class UserViewRide extends Controller
{
    public function show()
    {

        $ride['ride']=DB::table('new_trip')->get();
        if (count($ride)>0){

            return view('user.user_ride',$ride);
        }
        else{


            return view('user.user_ride');
        }


        }
    public function showhome()
    {

        $ride['ride']=DB::table('new_trip')->get();
        if (count($ride)>0){

            return view('user.layout',$ride);
        }
        else{


            return view('user.layout');
        }


    }
    public function postview($id)
    {
        $ride=addride::find($id);
        $query['query']=DB::table('query')->where('post_id',$id)->get();

        if (count($ride)>0){

            return view('user.postview',['ride'=>$ride],$query);
        }
        else{


            return view('user.postview');


        }


    }
    public function store(Request $request  )

    {


        $query=new query();
        $query->sender_email=Auth::User()->email;
        

        $query->post_id=$request->post_id;
        $query->sender_name=Auth::User()->name;
        $query->message=$request->message;
        $query->user_id=Auth::User()->id;
        $query->save();

        return redirect()->back();



    }
    public function delete($id)
    {
        DB::table('query')->where('user_id', Auth::id())->delete();
        return redirect()->back();

    }

    public function map($id)
    {
        $ride=addride::find($id);
        $source=$ride->source_city;
        $dest=$ride->destination_city;
        return view('map',compact('source','dest'));

    }



}
