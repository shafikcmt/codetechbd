<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// Start Frontend Route here
Route::get('/',[FrontendController::class,'index'])->name("home");

Route::middleware(['auth'])->name('admin.')->group(function(){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
