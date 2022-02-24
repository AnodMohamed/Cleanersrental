<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Cleaner\CleanerDashboardComponent;
use App\Http\Livewire\Company\CompanyDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProfileComponent;
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

Route::get('/', HomeComponent::class);
 // For User or Customer
 Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/profile',ProfileComponent::class)->name('profile');

});


//admin 
Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});


//Cleaner 
Route::middleware(['auth:sanctum','verified','authCleaner'])->group(function(){
    Route::get('/cleaner/dashboard',CleanerDashboardComponent::class)->name('cleaner.dashboard');
});

//Cleaner 
Route::middleware(['auth:sanctum','verified','authCompany'])->group(function(){
    Route::get('/company/dashboard',CompanyDashboardComponent::class)->name('company.dashboard');
    
     
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
