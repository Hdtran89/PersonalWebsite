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

Route::post('/sendMessage',function(){
	$data = array(
		'firstname' => Input::get('name'),
		'lastname' => Input::get('surname'),
		'email' => Input::get('email'),
		'msg' => Input::get('message')
	);
	if(!isset($_COOKIE['mailsent'])) {
  	Mail::send('emails.message', $data, function($message){
			$message->from(Input::get('email'),Input::get('name'));
			$message->to('hdtran89@gmail.com')->subject('Message from Hdtran89.me');
		});
   	setcookie('mailsent');
	}

	return Redirect::back()->with('success', 'Thanks for the Message! I will get back to you ASAP');
});