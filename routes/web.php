<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubcategoryController;
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
    
        Route::get('/admin/profile',[ProfileController::class,'index'])->name('profile');
        Route::post('/admin/personal-info/update/{id}', [ProfileController::class, 'update'])->name('personal.update');
        Route::get('/admin/change-password',[ProfileController::class,'changePass'])->name('change.passowrd');
        Route::post('/admin/password/update/{id}',[ProfileController::class,'UpdatePass'])->name('update.password');
    
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('admin',AdminController::class);
        Route::get('admin/destroy/{id}',[AdminController::class,'destroy'])->name('admin.delete');

    });
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');

    });
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('category',CategoryController::class);
        Route::post('category/status/{id}',[CategoryController::class,'status'])->name('category.status');
        Route::get('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    });
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('subcategory',SubcategoryController::class);
        Route::post('subcategory/status/{id}',[SubcategoryController::class,'status'])->name('subcategory.status');
        Route::get('subcategory/destroy/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.delete');

    });
    Route::group(['prefix'=>'/admin/dashboard'],function(){
        Route::resource('portfolio',PortfolioController::class);
        Route::post('portfolio/status/{id}',[SliderController::class,'status'])->name('portfolio.status');
    });
});

require __DIR__.'/auth.php';
