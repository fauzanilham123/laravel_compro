<?php

use App\Http\Controllers\Career_pageController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


use App\Http\Controllers\Front\Home\HomeController;
use App\Http\Controllers\Front\About\AboutController;
use App\Http\Controllers\Front\Client\ClientsController;
use App\Http\Controllers\Front\Contact\ContactController;
use App\Http\Controllers\Front\Career\CareerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController as Contact;
use App\Http\Controllers\EvolutionController;
use App\Http\Controllers\CompanyGoalsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AboutController as About;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\Client_pageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Career_pageController as Career_page;
use App\Http\Controllers\BenefitsController;
use App\Http\Controllers\CareerControllers;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CultureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/client', [ClientsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/career', [CareerController::class, 'index']);








Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['prepix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/teams', TeamController::class);
    Route::resource('/contacts', Contact::class);
    Route::resource('/evolutions', EvolutionController::class);
    Route::resource('/company_goals', CompanyGoalsController::class);
    Route::resource('/settings', SettingController::class);
    Route::resource('/abouts', About::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/homes', Home::class);
    Route::resource('/client_page', Client_pageController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/business', BusinessController::class);
    Route::resource('/career_pages', Career_page::class);
    Route::resource('/benefits', BenefitsController::class);
    Route::resource('/careers', CareerControllers::class);
    Route::resource('/categorys', CategoryController::class);
    Route::resource('/cultures', CultureController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');