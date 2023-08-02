<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_product;

class add_product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display all products on customer store
        $products=add_product::all();
        return view('store.store',compact('products'));
    }

    public function listofproducts()
    {
        //display all products on admin account
        $listofproducts=add_product::all();
        return view('products.list_pro',compact('listofproducts'));
    }

    public function sellerproducts()
    {
        //display all seller products on admin account
        $seller_products=add_product::all();
        return view('products.seller_pro',compact('seller_products'));
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
        //add a new product
        $add=new add_product();

        if ($request->hasfile('csv')) {
            $file = $request->file('csv');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('image/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $add->csv = $filename;
        } else {
            //return $request;
            //$add->image = '';

        }


        $add->product_title=$request->input('product_title');
    
        if ($request->hasfile('main_image')) {
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('image/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $add->main_image = $filename;
        } else {
            //return $request;
            //$add->image = '';

        }




        if ($request->hasfile('other_images')) {
            $file = $request->file('other_images');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('image/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $add->other_images = $filename;
        } else {
            //return $request;
            //$add->image = '';

        }
       
              

        $add->main_category=$request->input('main_category');   
        $add->sub_category=$request->input('sub_category');  
        $add->price =$request->input('price');    
        $add->sku  =$request->input('sku'); 
        $add->quantity =$request->input('quantity'); 
        $add->brand_name =$request->input('brand_name');   
        $add->package_contains =$request->input('package_contains');   
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
    public function showitemdetails($id)
    {
        //show single item details
        $product = add_product::find($id);        
        return view('store.item_details',compact ('product'));
    }


    public function showaddtocart($id)
    {
        //show add to cart details
        $product = add_product::find($id);        
        return view('store.add_to_cart',compact ('product')); 

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
