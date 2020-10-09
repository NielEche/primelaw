<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/attorneys', [PagesController::class, 'attorneys'])->name('attorneys');
Route::get('/experiences', [PagesController::class, 'experiences'])->name('experiences');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/appointment', [PagesController::class, 'appointment'])->name('appointment');
Route::get('/practiceArea', [PagesController::class, 'practiceArea'])->name('practiceArea');
Route::get('/companyInvestmentLaws', [PagesController::class, 'companyInvestmentLaws'])->name('companyInvestmentLaws');
Route::get('/OilandGas', [PagesController::class, 'OilandGas'])->name('OilandGas');

