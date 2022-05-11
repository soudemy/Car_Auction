<?php

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
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

Route::name('web.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/single-page', [IndexController::class, 'singlePage'])->name('single-page');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/roles', [IndexController::class, 'roles'])->name('roles');
    Route::get('/vehicle-search', [IndexController::class, 'vehicle_search'])->name('vehicle_search');
//  Route::get('/roles', [IndexController::class, 'roles'])->name('roles'); is there a need for authentication page??????

    //register
    Route::get('/register', [IndexController::class, 'registerPage'])->name('register');
    Route::post('/register', [IndexController::class, 'register'])->name('register');
 //login
    Route::get('/login', [IndexController::class, 'loginPage'])->name('login');
    Route::post('/login', [IndexController::class, 'login'])->name('login');

});

Route::prefix('user-panel')->name('user.')->group(function () {

    Route::get('/dashboard', [UserIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/ad-list', [UserIndexController::class, 'adList'])->name('ad-list');
    Route::get('/add-car', [UserIndexController::class, 'addCar'])->name('add-car');
    Route::post('/add-car-post', [UserIndexController::class, 'addCarPost'])->name('add-car-post');
    Route::get('/my-ads', [UserIndexController::class, 'myAds'])->name('my-ads');
    Route::get('/profile', [UserIndexController::class, 'profile'])->name('profile');


});

Route::prefix('admin-panel')->name('admin.')->group(function () {


    Route::get('/dashboard', [AdminIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/user-management', [AdminIndexController::class, 'userManagement'])->name('user-management');
    Route::get('/ad-management', [AdminIndexController::class, 'adManagement'])->name('ad-management');
    Route::get('/package-management', [AdminIndexController::class, 'packageManagement'])->name('package-management');
    Route::get('/settings', [AdminIndexController::class, 'settings'])->name('settings');
    Route::get('/user-management/{user}/user-edit', [AdminIndexController::class, 'edit'])->name('user-edit');
    Route::post('/user-management/user-edit/saved/{itemId}', [AdminIndexController::class, 'update'])->name('updated');

});

