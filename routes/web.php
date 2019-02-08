<?php
use App\Events\MessagePosted;

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

Route::get('/chat', function(){
    return view('chat');
})->middleware('auth');

Route::get('/messages',function(){
    return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages',function(){
    $user = Auth::user();
    $message = $user->messages()->create(['message'=>request('message')]);
    // event(new MessagePosted($message, $user));
    broadcast(new MessagePosted($message, $user))->toOthers();//with this you can broadcast event to every one except current user
    return ['status'=>'OK'];


})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
