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


Route::get('/','PageController@dashboard');

Route::get('/train_routes','PageController@train_routes');

Route::get('/purchase_ticket','PageController@purchaseTicket');

Route::get('/purchase_query_show','PageController@purchaseTicketQueryShow');


Route::post('/purchase_query','PageController@purchaseTicketQuery');


