<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//landingPage
Route::get('/add-section', [App\Http\Controllers\HeroSectionController::class, 'create'])->name('landing.page');
Route::post('/add-section', [App\Http\Controllers\HeroSectionController::class, 'store'])->name('store.hero.section');

//about section
Route::get('/about', [App\Http\Controllers\AboutSectionController::class, 'create'])->name('about.section');
Route::post('/about', [App\Http\Controllers\AboutSectionController::class, 'store'])->name('add.about.section');

//section three
Route::get('/section-three', [App\Http\Controllers\SectionThreeController::class, 'create'])->name('section.three');
Route::post('/section-three', [App\Http\Controllers\SectionThreeController::class, 'store'])->name('add.section.three');

//Package prices
Route::get('/starter', [App\Http\Controllers\StarterController::class, 'create'])->name('section.price');
Route::post('/starter', [App\Http\Controllers\StarterController::class, 'store'])->name('add.section.price');

//Package prices
Route::get('/exclusive', [App\Http\Controllers\ExclusiveController::class, 'create'])->name('section.exclusive');
Route::post('/exclusive', [App\Http\Controllers\ExclusiveController::class, 'store'])->name('add.section.exclusive');

//Package prices
Route::get('/premium', [App\Http\Controllers\PremiumController::class, 'create'])->name('section.premium');
Route::post('/premium', [App\Http\Controllers\PremiumController::class, 'store'])->name('add.section.premium');


Route::get('/services', [App\Http\Controllers\ServiceController::class, 'create'])->name('section.service');
Route::post('/services', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.add');
