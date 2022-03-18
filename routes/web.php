<?php

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Admin\Home\HomeSectionController;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\BuyCarLeadController;
use App\Http\Controllers\Admin\SellCarController;
use App\Http\Controllers\Admin\MotorTraderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Home\FaqController;  
use App\Http\Controllers\Admin\Home\EmailTemplateController;  
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Models\Faq;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\SellCar\CarController;
use App\Models\BuyCarLead;
use App\Models\SellCarLead;
use App\Models\AboutUs;
use App\Models\MotoreTraders;
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
        'traders' => MotorTraderController::class,
        'roles' => RoleController::class, //Roles and permissions
        'users' => UserController::class, //Clients
    ]);
    //obaid work here
    Route::get('dashboard/home',  [HomeSectionController::class, 'home'])->name('user_dropdown/home');
    Route::post('/hero-section', [HomeSectionController::class, 'store_hero_section']);
    Route::post('/how-it-work', [HomeSectionController::class, 'store_how_it_work']);
    Route::post('/how-it-work-header', [HomeSectionController::class, 'store_how_it_work_header']);
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

    //email page url
    Route::get('dashboard/email', function () {
        return view('dashboard/email/index');
    })->name('index');



    // Questionnaire Routes
    Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('user_dropdown/questionnaire');
    Route::post('/insert-questions', [QuestionnaireController::class, 'insert']);
    Route::post('/insert-headings', [QuestionnaireController::class, 'insert_headings']);
    Route::post('/delete-questionnaire', [QuestionnaireController::class, 'delete'])->name('delete-questionnaire');
    Route::post('/delete-headings', [QuestionnaireController::class, 'delete_headings'])->name('delete-headings');
    Route::get('/questionaire-edit/{id}', [QuestionnaireController::class, 'edit_Questionaire']);
    Route::post('/update-questionaire', [QuestionnaireController::class, 'update_Questionaire']);

    // Email work

    Route::get('/dashboard/template2', [EmailTemplateController::class, 'template2'])->name('template2');
    Route::post('/email-template2', [EmailTemplateController::class, 'email_template2'])->name('email-template2');
    Route::get('/dashboard/template3', [EmailTemplateController::class, 'template3'])->name('template3');
    Route::post('/email-template3', [EmailTemplateController::class, 'email_template3'])->name('email-template3');
    Route::get('/dashboard/template6', [EmailTemplateController::class, 'template6'])->name('template6');
    Route::post('/email-template6', [EmailTemplateController::class, 'email_template6'])->name('email-template6');
    
     Route::post('/email-template8', [EmailTemplateController::class, 'email_template8'])->name('email-template8');


    Route::get('/sell-car', [SellCarController::class, 'index'])->name('Car.sell-car');
    Route::post('sell-car-delete',[SellCarController::class, 'destroy'])->name('sellcar-delete');
    Route::get('/leads-details/{id}', [SellCarController::class, 'sell_car_lead_details'])->name('Car.leads-details');
    Route::get('/buy-car', [BuyCarLeadController::class, 'index'])->name('Car.buy-car');
    Route::post('/buy-car-lead-delete', [BuyCarLeadController::class, 'buy_car_delete'])->name('buy-car-delete');
    Route::get('/evaluate-car/{id}', [BuyCarLeadController::class, 'evaluate_car'])->name('Car.evaluate-car');

    Route::get('/dashboard', function () {
        $totalsellcarleads = SellCarLead::count();
        $buycarlead = BuyCarLead::count();
        $motorslead=MotoreTraders::count();
        return view('dashboard', compact('totalsellcarleads', 'buycarlead','motorslead'));
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
Route::post('/motor-trader', [HomeController::class, 'motor_trader_lead'])->name('motor.trader');

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
})->name('frontend/reviews');

Route::get('/thankyou_buy_car', function () {
    return view('frontend/sellcar/thankyou_page1');
})->name('thankyou.buy.car');

Route::get('/thankyou_sell_car', function () {
    return view('frontend/sellcar/thankyou_page2');
})->name('thankyou.sell.car');

Route::get('/motor-traders', function () {
    return view('frontend/sellcar/motor-traders');
})->name('frontend/motor-traders');

Route::get('/thankyou_page3', function () {
    return view('frontend/sellcar/thankyou_page3');
})->name('thankyou_page3');

// Email routes

Route::get('/frontend/template1', function () {
    return view('frontend/mails/email_template1');
})->name('email_template1');

Route::get('/frontend/template2', function () {
    return view('frontend/mails/email_template2');
})->name('email_template2');


Route::get('/frontend/template3', function () {
    return view('frontend/mails/email_template3');
})->name('email_template3');


Route::get('/frontend/template4', function () {
    return view('frontend/mails/email_template4');
})->name('email_template4');

Route::get('/frontend/template5', function () {
    return view('frontend/mails/email_template5');
})->name('email_template5');

Route::get('/frontend/template6', function () {
    return view('frontend/mails/email_template6');
})->name('email_template6');    

Route::get('/frontend/template7', function () {
    return view('frontend/mails/email_template7');
})->name('email_template7');

Route::get('/frontend/template8', function () {
    return view('frontend/mails/email_template8');
})->name('email_template8');
Route::get('/dashboard/template8', function () {
     $users = MotoreTraders::get();
    return view('dashboard/email/template8',compact('users'));
})->name('template8');

Route::get('/frontend/template9', function () {
    return view('frontend/mails/email_template9');
})->name('email_template9');

Route::get('/frontend/template10', function () {
    return view('frontend/mails/email_template10');
})->name('email_template10');


Route::get('/frontend/template11', function () {
    return view('frontend/mails/email_template11');
})->name('email_template11');

Route::get('test', function () {

    $user = [
        'name' => 'Atif Masood',
        'info' => 'Laravel & Python Devloper'
    ];

    \Mail::to('rajaatif927@gmail.org')->send(new \App\Mail\NewMail($user));

    dd("success");

});