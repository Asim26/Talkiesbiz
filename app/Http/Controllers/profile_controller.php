<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\User;
use Auth;

class profile_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_admin_users()
    {
        //display all admin users on admin account
        $all_admin_users=User::where('user_type','Admin')->get();
        return view('users.admin_users',compact('all_admin_users'));
    }

    public function all_reseller_users()
    {
        //display all reseller users on admin account
        $all_reseller_users=User::where('user_type','Reseller')->get();;
        return view('users.reseller_users',compact('all_reseller_users'));
    }

    public function all_seller_users()
    {
        //display all seller users on admin account
        $all_seller_users=User::where('user_type','Seller')->get();;
        return view('users.seller_users',compact('all_seller_users'));
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

    public function change_password()
    {
      //$user_password= Auth::user()->password;
      //$decrypt = Crypt::decrypt($user_password);
      //return view('profile.change_password',compact('decrypt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add=new profile();
        $add->name=$request->input('name');    
        $add->email =$request->input('email');  
        $add->contact =$request->input('contact');
        $add->address =$request->input('address');  
        $add->city =$request->input('city');  
        $add->country =$request->input('country');  
        $add->emirate_id =$request->input('emirate_id');  
        $created=$add->save();
        if($created){

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
