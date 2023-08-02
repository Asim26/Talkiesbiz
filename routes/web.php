<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


/*
Route::get('/dashboard', function () {
    return view('dashboard');
});
*/

Route::get('/dashboard', 'billing_detail_Controller@dashboard');
//Route::get('/dashboard', 'HomeController@all_data');

/*
Route::get('/orders', function () {
    return view('orders.orders');
});
*/
Route::get('orders','billing_detail_controller@orders_seller_reseller');

/*
Route::get('/admin_user', function () {
    return view('users.admin_users');
});
*/
Route::get('/admin_user','profile_controller@all_admin_users');

/*
Route::get('/seller_user', function () {
    return view('users.seller_users');
});
*/
Route::get('/seller_user','profile_controller@all_seller_users');

/*
Route::get('/reseller_user', function () {
    return view('users.reseller_users');
});
*/
Route::get('/reseller_user','profile_controller@all_reseller_users');





Route::get('/documents', function () {
    return view('documents.documents');
});
Route::get('/documents/upload', function () {
    return view('documents.documents_upload');
});


/*
Route::get('/list_pro', function () {
    return view('products.list_pro');
});*/

Route::get('/list_pro','add_product_controller@listofproducts');

/*
Route::get('/seller_pro', function () {
    return view('products.seller_pro');
});
*/
Route::get('/seller_pro','add_product_controller@sellerproducts');







Route::get('/add_pro', function () {
    return view('products.add_pro');
});
Route::post('/add_pro/save','add_product_controller@store');









Route::get('/categories', function () {
    return view('products.categories');
});



Route::get('/customer', function () {
    return view('customers.customer');
});
Route::get('/customer','billing_detail_controller@customerdetails');



Route::get('/product_status', function () {
    return view('products.product_status');
});







Route::get('/add_bulk', function () {
    return view('products.add_bulk');
});
Route::post('/add_bulk/save','add_product_controller@store');









Route::get('/store_setting', function () {
    return view('store_setting.store_setting');
});
Route::post('/store_setting/save','store_setting_controller@store');








Route::get('/account_info', function () {
    return view('account_info.account_info');
});
Route::post('/account_info/save', 'account_info_controller@store');






Route::get('/orders_history', function () {
    return view('orders.orders_history');
});
Route::get('/rating', function () {
    return view('rating.rating');
});







Route::get('/profile', function () {
    return view('profile.profile');
});
Route::post('/profile/save','profile_controller@store');







Route::get('/payment_method', function () {
    return view('payment.payment_method');
});
Route::post('/payment_method/save/{id}','payment_method_controller@store');







Route::get('/change_password', function () {
    return view('profile.change_password');
});


//Route::get('/change_password','profile_controller@change_password');


Route::get('/payment_history', function () {
    return view('payment.payment_history');
});
Route::get('/tracking', function () {
    return view('tracking.tracking');
});




/*
Route::get('/store', function () {
    return view('store.store');
});*/

Route::get('/store', 'add_product_controller@index');



/*
Route::get('store/item_details', function () {
    return view('store.item_details');
});
*/
Route::get('/store/item_detail/{id}','add_product_controller@showitemdetails');


Route::get('store/item_detail/wishlist', function () {
    return view('store.wishlist');
});

/*
Route::get('store/item_detail/{id}/add_to_cart', function () {
    return view('store.add_to_cart');
});
*/

Route::get('store/item_detail/{id}/add_to_cart','add_product_controller@showaddtocart');





Route::get('/billing_detail', function () {
    return view('store.billing_detail');
});
//Route::post('/placeorder','billing_detail_controller@store');
Route::post('/placeorder/{id}','billing_detail_controller@store');






Route::get('congrats', function () {
    return view('store.congrats');
});

Route::get('contact', function () {
    return view('contact.contact');
});

Route::get('modal', function () {
    return view('modal');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
