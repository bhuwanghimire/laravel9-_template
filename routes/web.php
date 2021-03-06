<?php

use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
                 return view('admin.index');
    })->name('dashboard');
});

//user profile and password
Route::prefix('profile')->group(function(){

 Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');

 Route::get('/edit',[ProfileController::class,'ProfileEdit'])->name('profile.edit');

 Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');

 Route::get('/password/view',[ProfileController::class,'PasswordView'])->name('password.view');

 Route::post('/password/update',[ProfileController::class,'PasswordUpdate'])->name('password.update');

});

