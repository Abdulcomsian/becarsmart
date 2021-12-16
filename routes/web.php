<?php

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Admin\Home\HomeSectionController;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\BuyCarLeadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function () {
    //All Resource Controller
    Route::resources([
        'roles' => RoleController::class, //Roles and permissions
        'users' => UserController::class, //Clients
    ]);
    //obaid work here
    Route::get('dashboard/home',  [HomeSectionController::class, 'home'])->name('user_dropdown/home');
    Route::post('/hero-section', [HomeSectionController::class, 'store_hero_section']);
    Route::post('/how-it-work', [HomeSectionController::class, 'store_how_it_work']);
    Route::post('/how-it-work-delete', [HomeSectionController::class, 'how_it_work_delete']);
    Route::post('/why-sell-car', [HomeSectionController::class, 'why_sell_car']);
    Route::post('/blog-heading', [HomeSectionController::class, 'blog_heading']);
    Route::post('dashboard/blogs', [HomeSectionController::class, 'blogs']);
    Route::get('dashboard/blog', [HomeSectionController::class, 'get_Blog']);
    Route::get('/add-blog', [HomeSectionController::class, 'add_Blog']);
    Route::post('/blog-delete', [HomeSectionController::class, 'delete_Blog']);
    Route::get('/blog-edit/{id}', [HomeSectionController::class, 'edit_Blog']);
    Route::post('/update-blog', [HomeSectionController::class, 'update_Blog']);
    Route::post('/testominal', [HomeSectionController::class, 'testominal']);
    Route::post('/testominal-delete', [HomeSectionController::class, 'testominal_delete']);


    // Questionnaire Routes
    Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('user_dropdown/questionnaire');
    Route::post('/insert-questions', [QuestionnaireController::class, 'insert']);
    Route::post('/delete-questionnaire', [QuestionnaireController::class, 'delete'])->name('delete-questionnaire');


    Route::get('/sell-car', function () {
        return view('Car.sell-car');
    })->name('Car.sell-car');

    Route::get('/buy-car', [BuyCarLeadController::class, 'index'])->name('Car.buy-car');
    Route::get('/buy-car-lead-delete', [BuyCarLeadController::class, 'buy_car_delete'])->name('buy-car-delete');
    Route::get('/evaluate-car/{id}', [BuyCarLeadController::class, 'evaluate_car'])->name('Car.evaluate-car');

    Route::get('/leads-details', function () {
        return view('Car.leads-details');
    })->name('Car.leads-details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//For local, not for production
//Run fresh migration and seeder
if (env('EnableMigrationAndOptimizeClearRoutes') == true) {
    Route::get('run-migrations', function () {
        Artisan::call('migrate:fresh --seed');
        dd('migration and seeder done');
    });
    Route::get('optimize', function () {
        Artisan::call('optimize:clear');
        dd('optimize done');
    });
}


// BeCarSmart routing list
Route::get('/', [HomeController::class, 'index'])->name('frontend/index');
Route::get('/index', [HomeController::class, 'index'])->name('frontend/index');
Route::post('/buy-car-leads-save', [HomeController::class, 'buy_car_lead'])->name('buy-car-leads-save');
Route::post('/sellcar_new', [HomeController::class, 'sell_car_lead'])->name('sell-car-leads-save');
Route::post('/find-vehicle', [HomeController::class, 'find_vehicle'])->name('find.vehicle');

Route::get('/sellcar_new', function () {
    return view('frontend/sellcar/sellcar_new');
})->name('frontend/sellcar_new');
Route::get('/home', function () {
    return view('frontend/sellcar/home');
})->name('frontend/home');

Route::get('/blog/{id}', [BlogController::class, 'Blog_details'])->name('blog');

Route::get('/contact', function () {
    return view('frontend/sellcar/contact');
})->name('frontend/contact');

Route::get('/cookies', function () {
    return view('frontend/sellcar/cookies');
})->name('frontend/cookies');

Route::get('/faq', function () {
    return view('frontend/sellcar/faq');
})->name('frontend/faq');

Route::get('/privacy_policy', function () {
    return view('frontend/sellcar/privacy_policy');
})->name('frontend/privacy_policy');

Route::get('/sellcar', function () {
    return view('frontend/sellcar/sellcar');
})->name('frontend/sellcar');

Route::get('/term', function () {
    return view('frontend/sellcar/term');
})->name('frontend/term');

Route::get('/frontend/login', function () {
    return view('frontend/sellcar/login');
})->name('frontend/login');
