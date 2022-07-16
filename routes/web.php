<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestLogin;
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
Route::middleware([TestLogin::class])->group(function(){
    Route::get('/', 'App\Http\Controllers\Validation\ValidationController@get_val');

});



Route::get('new_reg', 'App\Http\Controllers\Validation\ValidationController@save_new');

Route::post('new_validation', 'App\Http\Controllers\Validation\ValidationController@new_validation');

Route::get('/posts',function(){
    \App\Models\Post::create([
        'title'=>'Blog',
        'user_id'=>8
    ]);
});





