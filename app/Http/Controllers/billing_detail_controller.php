<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\billing_detail;
use App\User;


class billing_detail_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerdetails()
    {
        //display all details of customer on admin account
        $customer_details=billing_detail::all();
        return view('customers.customer',compact('customer_details'));
    }

    public function orders_seller_reseller()
    {
        //display all orders of customer on seller/Reseller account
        $all_orders=billing_detail::all();
        return view('orders.orders',compact('all_orders'));
    }
    
    public function dashboard()
    {
        //display total no of orders on Admin account
        $no_of_orders=billing_detail::all()->count();
        $no_of_sellers=User::where('user_type','Seller')->count();
        $no_of_resellers=User::where('user_type','Reseller')->count();
        return view('dashboard',compact('no_of_orders','no_of_sellers','no_of_resellers'));
        
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
        $add=new billing_detail();
        $add->first_name=$request->input('first_name');   
        $add->last_name=$request->input('last_name');  
        $add->company_name =$request->input('company_name');    
        $add->state_country =$request->input('state_country'); 
        $add->town_city =$request->input('town_city'); 
        $add->street_address =$request->input('street_address');   
        $add->postcode_zip =$request->input('postcode_zip');  
        $add->state_country =$request->input('state_country');   
        $add->postcode_zip =$request->input('postcode_zip');   
        $add->phone =$request->input('phone');
        $add->email_address =$request->input('email_address');    
        $add->credit_card_no =$request->input('credit_card_no');    
        $add->card_type =$request->input('card_type');
        $add->expiry =$request->input('expiry');    
        $add->cvv =$request->input('cvv');    
        $created=$add->save();

        if($created){

           /* return redirect('/congrats'); */
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
