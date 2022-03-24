<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Phone;
use App\Models\Role;
use App\Events\UserEvent;
use App\Events\PostEvent;
use App\Http\Controllers\PostController;

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
Route::get('/',function(){
    return view('welcome');
});
Route::get('post',[PostController::class,'create']);
Route::get('post/{id}/edit',[PostController::class,'edit']);
//Route::get('/post', function () {
//  $phone = Phone::find(1);
//  $result = $phone->user;
//  return $result;

// $user = User::find(1);
// $result = $user->roles;
// return $result;

// $role = Role::find(1);
// $result = $role->users;
// return $result;
// $array = ['Ko Ko','Mg Mg','Tun Tun'];
// UserEvent::dispatch($array);
// });

// Route::get('/new',function(){
//    return view('welcome');
    // User::create([
    //     'name'=>'Mg Mg',
    //     'email'=>'mg@gmail.com',
    //     'password'=>Hash::make('12345678')
    // ]);

    // Phone::create([
    //     'name'=>'Oppo',
    //     'user_id'=>1
    // ]);

//});

Route::get('/broadcasting',function(){
    return view('message');
});

Route::get('/event',function(){
    $users = ["Ko Ko","Mg Mg","Tun Tun"];
    PostEvent::dispatch($users);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
