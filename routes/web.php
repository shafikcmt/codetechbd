<?php

use App\Http\Controllers\Backend\AdminController;
<<<<<<< HEAD
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SettingController;
=======
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubcategoryController;
>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// Start Frontend Route here
<<<<<<< HEAD
Route::get('/',[FrontendController::class,'index'])->name("home");

Route::middleware(['auth'])->name('admin.')->group(function(){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    
=======
// Route::get('/',[FrontendController::class,'index'])->name("home");
Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact/store','contactStore')->name('contact.store');
});

Route::middleware(['auth'])->name('admin.')->group(function(){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
        Route::get('/admin/profile',[ProfileController::class,'index'])->name('profile');
        Route::post('/admin/personal-info/update/{id}', [ProfileController::class, 'update'])->name('personal.update');
        Route::get('/admin/change-password',[ProfileController::class,'changePass'])->name('change.passowrd');
        Route::post('/admin/password/update/{id}',[ProfileController::class,'UpdatePass'])->name('update.password');
<<<<<<< HEAD
    
=======

>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('admin',AdminController::class);
        Route::get('admin/destroy/{id}',[AdminController::class,'destroy'])->name('admin.delete');

    });
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');

    });
<<<<<<< HEAD
    #settings
	Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::get('setting',[SettingController::class, 'index'])->name('setting');
    });
    #menu
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #category
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #subcategory
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #project
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #brand
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #whattodo
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #training
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #team
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #page
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
    });
    #subscriber
    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::resource('slider',SliderController::class);
        Route::post('slider/status/{id}',[SliderController::class,'status'])->name('slider.status');
        Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.delete');
=======
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
        Route::post('portfolio/status/{id}',[PortfolioController::class,'status'])->name('portfolio.status');

    });

    Route::group(['prefix'=> '/admin/dashboard'],function(){
        Route::get('/inbox/message',[ContactController::class,'inboxMessage'])->name('contact.index');
        Route::get('/inbox/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
        Route::post('/inbox/status/{id}',[ContactController::class,'inboxStatus'])->name('message.status');
>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
    });
});

require __DIR__.'/auth.php';
