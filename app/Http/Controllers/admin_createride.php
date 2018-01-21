<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\addride;
use App\User;
use Auth;






class admin_createride extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addride=new addride();

        $addride->title=Auth::User()->name;
        $addride->source_city=$request->source_city;
        $addride->destination_city=$request->destination_city;
        $addride->seats_available=$request->seats_available;
        $addride->time=$request->time;
        $addride->fare=$request->fare;
        $addride->car_no=$request->car_no;
        $addride->date=$request->date;
        $addride->user_id=Auth::User()->id;
        $addride->save();
        return redirect('admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {

        //$users = User::find(Auth::user()->id);
        $ride['ride']=DB::table('new_trip')->where('user_id', Auth::id())->get();
        if (count($ride)>0){

            return view('admin.admin_viewride',$ride);
        }
        else{


            return view('admin.admin_viewride');


        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ride=addride::find($id);
        return view('admin.admin_editride',['ride'=>$ride]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ride=addride::find($id);

        $ride->source_city=$request->source_city;
        $ride->destination_city=$request->destination_city;
        $ride->seats_available=$request->seats_available;
        $ride->time=$request->time;
        $ride->fare=$request->fare;
        $ride->car_no=$request->car_no;
        $ride->date=$request->date;
        $ride->user_id=$request->user_id;


        $ride->save();

        return redirect('admin_viewride');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('new_trip')->where('id',$id)->delete();
        return redirect('admin_viewride');

    }



}
