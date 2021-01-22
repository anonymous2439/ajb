<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Mail\ResumeMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/jobsearch', [HomeController::class, 'jobsearch']);
Route::get('/jobsearch/view/{id}', [HomeController::class, 'jobView']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::post('/checklogin', [HomeController::class, 'checkLogin']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/admin/home', [HomeController::class, 'adminHome']);
Route::post('/admin/getposts', [HomeController::class, 'getPosts']);

Route::resource('/post', PostsController::class);
Route::post('/post/destroyall', [PostsController::class, 'destroyall']);
Route::get('/post/get/{id}', [PostsController::class, 'getPost']);

Route::get('/email', [HomeController::class, 'email']);
Route::post('/email/send', [HomeController::class, 'sendEmail']);
Route::get('/email/success', [HomeController::class, 'successEmail']);

/*Route::get('/email', function(){
	//Mail::to('email@gmail.com')->send(new ResumeMail());
	$data = array(
		'email' =>'test@email.com',
		'subject' => 'test subject',
		'bodyMessage' => 'test body',
	);
	Mail::send(new ResumeMail(), $data, function($message){
		$message->to($data['email']);
		$message->subject('welcome to laravel');
		$message->from('from@email.com');
	});

	$data = array('name'=>"Virat Gandhi");
	Mail::send(['text'=>'emails.resume'], $data, function($message) {
	    $message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
	    $message->from('test@email.com','Virat Gandhi');
	});
	return new ResumeMail();
});*/