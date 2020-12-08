<?php

use Illuminate\Routing\Router;

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
// include('routes_account.php');

Route::get('/',  'StatisticController@index')->name('home');
Route::get('login', 'AccountController@showLoginForm')->name('ad.login');
Route::post('login', 'AccountController@login')->name('ad.post.login');
Route::get('logout', 'AccountController@logout')->name('logout');

Route::post('add-to-cart', 'OrderController@addToCart');
Route::post('update-cart', 'OrderController@updateCart');
Route::post('remove-cart', 'OrderController@removeCart');
Route::get('clear-cart', 'OrderController@clearCart');
Route::post('cus-promotion', 'OrderController@CusPromotion');

//mai mot admin và nhan vien se quang vao day
Route::group(['prefix'=>'quan-tri','middleware'=>'checkad'],function(){
    Route::get('my-account', 'AccountController@index')->name('quantri.home');
    Route::post('/chinh-sua-thong-tin-{id}','AccountController@edit_password')->name('taikhoan.update');


    Route::group(['prefix' => 'cate_customer'], function () {
        Route::get('/cate-customer','CateCustomerController@index')->name('listcate_customer');

        Route::get('/cate-customer-create','CateCustomerController@get_create')->name('create_cate_customer');
        Route::post('/cate-customer-create','CateCustomerController@post_create')->name('pcreate_cate_customer');

        Route::get('/cate-customer-edit-{cate_customer_ID}','CateCustomerController@get_edit')->name('edit_cate_customer');
        Route::post('/cate-customer-edit-{cate_customer_ID}','CateCustomerController@post_edit')->name('pedit_cate_customer');

        Route::get('/del-{cate_customer_ID}','CateCustomerController@del')->name('del_cate_customer');
    });
    // Route::group(['prefix' => 'roadmap'], function () {
    //     Route::get('/'.'RoadmapController@index')->name('listroadmap');
    // }); 

});
Route::post('update-account', 'AccountController@update');








// Route::resource('customer', 'CustomerController');
// Route::resource('cate-customer', 'CateCustomerController');

// Route::resource('roadmap', 'RoadmapController');
// Route::resource('payment', 'PaymentController');
// Route::resource('staff', 'StaffController');
// Route::resource('choose', 'ChooseController');
// Route::resource('report', 'ReportController');

// Route::get('statistic', 'StatisticController@index');
// Route::get('searchProduct', 'ProductController@searchProduct');
// Route::get('searchCustomer', 'CustomerController@searchCustomer');
// Route::get('searchStaff', 'StaffController@searchStaff');

/* đăng ký  */
Route::get('/account', 'HomeController@index')->name('home1');
Route::get('/account/acc-profile/profile', 'ProfileController@index');
Route::get('/account/acc-profile/register','ProfileController@getregistration')->name('get.register');
Route::post('/account/acc-profile/register','ProfileController@postregistration')->name('register');
Route::get('/account/login-acc', 'ProfileController@showlogin')->name('get.login');
Route::post('/account/login-acc', 'ProfileController@postlogin')->name('login');

Route::group(['prefix'=>'acc-pro','middleware'=>'xyz'],function(){
    Route::get('/acc-profile/profile','ProfileController@updateprofileacc')->name('update_profile');
    Route::post('/chinh-sua-thong-tin-{id}','ProfileController@edit_password')->name('taikhoan.update');
});


Route::get('/account/acc-profile/roadmap-profile','ProfileController@getroadmappro');
Route::post('/account/acc-profile/roadmap-profile','ProfileController@postroadmappro')->name('roadmapprofile');

/* thông tin tài khoản */


/* đăng lộ trình : đăng bài - phương tiện thời gian - giá  */
// Route::get('/account/acc-roadmap/where', 'AccroadmapController@getroadmap');
Route::get('/account/acc-roadmap/where', 'AccroadmapController@postroadmap');



// Route::get('/account/acc-roadmap/vehicle','AccroadmapController@getvehicle')->name('vehicle.roadmap');
// Route::post('/account/acc-roadmap/vehicle','AccroadmapController@postvehicle');
Route::get('/account/acc-roadmap/vehicle', function () {
    return view('account.acc-roadmap.vehicle');
});

