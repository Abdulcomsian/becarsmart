<?php

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Admin\Home\HomeSectionController;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\BuyCarLeadController;
use App\Http\Controllers\Admin\SellCarController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Home\FaqController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Models\Faq;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\SellCar\CarController;
use App\Models\BuyCarLead;
use App\Models\SellCarLead;
use App\Models\AboutUs;
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

    //about page csm url
    Route::get('dashboard/about', [AboutController::class, 'index']);
    Route::post('dashboard-about-save', [AboutController::class, 'store'])->name('dashboard.about.store');
    Route::post('about-us-delete', [AboutController::class, 'delete']);
    //faq page

    Route::get('dashboard/faq', [FaqController::class, 'index']);
    Route::post('dashboard-faq-save', [FaqController::class, 'store'])->name('dashboard.faq.store');
    Route::post('faq-delete', [FaqController::class, 'delete']);
    //contact page url
    Route::get('dashboard/contact-us', [ContactUsController::class, 'index']);
    Route::post('dashboard-contact-us-save', [ContactUsController::class, 'store'])->name('dashboard.contact.store');


    // Questionnaire Routes
    Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('user_dropdown/questionnaire');
    Route::post('/insert-questions', [QuestionnaireController::class, 'insert']);
    Route::post('/delete-questionnaire', [QuestionnaireController::class, 'delete'])->name('delete-questionnaire');

    Route::get('/sell-car', [SellCarController::class, 'index'])->name('Car.sell-car');
    Route::get('/leads-details/{id}', [SellCarController::class, 'sell_car_lead_details'])->name('Car.leads-details');
    Route::get('/buy-car', [BuyCarLeadController::class, 'index'])->name('Car.buy-car');
    Route::get('/buy-car-lead-delete', [BuyCarLeadController::class, 'buy_car_delete'])->name('buy-car-delete');
    Route::get('/evaluate-car/{id}', [BuyCarLeadController::class, 'evaluate_car'])->name('Car.evaluate-car');

    Route::get('/dashboard', function () {
        $totalsellcarleads = SellCarLead::count();
        $buycarlead = BuyCarLead::count();
        return view('dashboard', compact('totalsellcarleads', 'buycarlead'));
    })->name('dashboard');
});





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

//frontend contact us controller
Route::get('/contact',  [ContactController::class, 'index'])->name('frontend/contact');
Route::post('/contact-send',  [ContactController::class, 'store'])->name('contact-store');



Route::get('/sellcar_new', function () {
    return view('frontend/sellcar/sellcar_new');
})->name('frontend/sellcar_new');
Route::get('/home', function () {
    return view('frontend/sellcar/home');
})->name('frontend/home');

Route::get('/blog/{id}', [BlogController::class, 'Blog_details'])->name('blog');
Route::get('/blogs', [BlogController::class, 'allblogs'])->name('frontend/allblogs');


Route::get('/cookies', function () {
    return view('frontend/sellcar/cookies');
})->name('frontend/cookies');

Route::get('/faq', function () {
    $faqdata = Faq::get();
    return view('frontend/sellcar/faq', compact('faqdata'));
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

Route::get('/how_it_works', function () {
    return view('frontend/sellcar/how_it_works');
})->name('frontend/how_it_works');



Route::get('/about', function () {
    $aboutdata = AboutUs::get();
    return view('frontend/sellcar/about', compact('aboutdata'));
})->name('frontend/about');

Route::get('/reviews', function () {
    return view('frontend/sellcar/reviews');
})->name('frontend/reviews');;

Route::get('/thankyou_buy_car', function () {
    return view('frontend/sellcar/thankyou_page1');
})->name('thankyou.buy.car');;

Route::get('/thankyou_sell_car', function () {
    return view('frontend/sellcar/thankyou_page2');
})->name('thankyou.sell.car');;
