<?php

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\SellCar\CarController;
use Illuminate\Support\Facades\Artisan;
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

Route::group(['middleware' => ['auth']], function() {
    //All Resource Controller
    Route::resources([
        'roles' => RoleController::class, //Roles and permissions
        'users' => UserController::class, //Clients
    ]);

    Route::get('/sell-car', function () {
        return view('Car.sell-car');
    })->name('Car.sell-car');

    Route::get('/buy-car', function () {
        return view('Car.buy-car');
    })->name('Car.buy-car');

    Route::get('/cms', function () {
        return view('Car.cms');
    })->name('Car.cms');
    
    Route::get('/leads-details', function () {
        return view('Car.leads-details');
    })->name('Car.leads-details');

    Route::get('/evaluate-car', function () {
        return view('Car.evaluate-car');
    })->name('Car.evaluate-car');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//For local, not for production
//Run fresh migration and seeder
if (env('EnableMigrationAndOptimizeClearRoutes') == true){
    Route::get('run-migrations', function(){Artisan::call('migrate:fresh --seed');dd('migration and seeder done');});
    Route::get('optimize', function(){Artisan::call('optimize:clear');dd('optimize done');});
}


// BeCarSmart routing list

Route::get('/frontend/index', function () {
    return view('frontend/sellcar/index');
})->name('frontend/index');

Route::get('/frontend/home', function () {
    return view('frontend/sellcar/home');
})->name('frontend/home');

Route::get('/frontend/blog', function () {
    return view('frontend/sellcar/blog');
})->name('frontend/blog');

Route::get('/frontend/contact', function () {
    return view('frontend/sellcar/contact');
})->name('frontend/contact');

Route::get('/frontend/cookies', function () {
    return view('frontend/sellcar/cookies');
})->name('frontend/cookies');

Route::get('/frontend/faq', function () {
    return view('frontend/sellcar/faq');
})->name('frontend/faq');

Route::get('/frontend/privacy_policy', function () {
    return view('frontend/sellcar/privacy_policy');
})->name('frontend/privacy_policy');

Route::get('/frontend/sellcar', function () {
    return view('frontend/sellcar/sellcar');
})->name('frontend/sellcar');

Route::get('/frontend/sellcar_new', function () {
    return view('frontend/sellcar/sellcar_new');
})->name('frontend/sellcar_new');

Route::get('/frontend/term', function () {
    return view('frontend/sellcar/term');
})->name('frontend/term');


Route::get('/frontend/login', function () {
    return view('frontend/sellcar/login');
})->name('frontend/login');



// dropdown Routes


Route::get('/home', function () {
    return view('user_dropdown/home');
})->name('user_dropdown/home');

Route::get('/questionnaire', function () {
    return view('user_dropdown/questionnaire');
})->name('user_dropdown/questionnaire');
