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

Auth::routes();

//dashboard route
Route::get('/admindashboard', 'AdminController@index')->middleware('admin');
Route::get('/userdashboard', 'UserController@index')->middleware('user');
Route::get('/operatordashboard', 'OperatorContoller@index')->middleware('operator');

//chat box route
Route::get('/chat/{id}','MessageController@index');


// Alladmin routes

                    //operator Routes Are Here
Route::get('/add/operator','operatormanage@add')->middleware('admin');
Route::post('/post/operator','operatormanage@post')->middleware('admin');
Route::get('/operator/list','operatormanage@list')->middleware('admin');
Route::get('/operator/delete/{id}','operatormanage@delete_operator')->middleware('admin');

            //game section routes
Route::get('/admin/add/game','GamelistController@form')->middleware('admin');
Route::post('/admin/post/game','GamelistController@post')->middleware('admin');
Route::get('/admin/game/edit/{id}','GamelistController@edit')->middleware('admin');
Route::post('/admin/game/update/{id}','GamelistController@update')->middleware('admin');
Route::get('/admin/game/delete/{id}','GamelistController@delete')->middleware('admin');

                //usermange routes
Route::get('/users/list','usermanage@list')->middleware('admin');
Route::get('/user/delete/{id}','usermanage@delete')->middleware('admin');
                // admin send msg to operator
Route::post('/sendmsg/opr/{id}','AdminmsgController@operator_msg')->middleware('admin');
Route::get('/admin/msglist','AdminmsgController@list')->middleware('admin');
Route::get('/admin/msg/dlt/{id}','AdminmsgController@delete')->middleware('admin');

                //category routes
Route::get('/admin/category','CategoryController@index')->middleware('admin');
Route::post('/admin/category/insert','CategoryController@cat_insert')->middleware('admin');
Route::get('/admin/category/delete/{id}','CategoryController@delete')->middleware('admin');
Route::get('/admin/category/edit/{id}','CategoryController@edit')->middleware('admin');
Route::post('/admin/category/update/{id}','CategoryController@update_cat')->middleware('admin');


// Users All Routes


                //ticket generation route
Route::get('/user/token','TicketController@tokenform')->middleware('user');
Route::post('/user/token/submit','TicketController@token_submit')->middleware('user');
Route::get('/user/tokenlist/','TicketController@token_list')->middleware('user');
Route::get('/user/token/solve/{id}','TicketController@tocken_solve')->middleware('user');



                        //game profile update
Route::get('/user/game/profile')->middleware('user');
Route::post('/user/game/update')->middleware('user');
Route::post('/user/game/updateinfo/{id}')->middleware('user');

                    //mesage under tocken



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
