<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//

Route::post('send-email','EmailController@sendEmail');
Route::post('send-sms','EmailController@sendSMS');
Route::post('short-url','EmailController@shortUrl');

Route::get('test',function (){

    \Illuminate\Support\Facades\Mail::send('mails.email',['title'=>'Test' , 'content' => 'Test'],function ($message){

        $message->from('ali@a.com');
        $message->to('muhammedahmed1520@gmail.com');
    });
    return "ok";

//    return Carbon::parse('25-12-2019')->setTimezone(getBranchTimeZone(1));
});