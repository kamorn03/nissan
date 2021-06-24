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
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\LoginController as LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ManageContentController;
use App\Http\Controllers\ManageSlideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurvayDataController;
use App\Http\Controllers\survayPage;

Route::view('/', 'welcome');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/main', function () {
    return view('main-menu');
})->name('main');

Route::get('/sent', [SurvayDataController::class,'send'])->name('sent.email');


// take survay
Route::get('/survay/{type}/product', [survayPage::class, 'survayProduct'])->name('survay.product');
Route::post('/survay/store-product', [SurvayDataController::class,'storeProduct'])->name('store.product');

Route::get('/survay/location', [survayPage::class, 'survayLocation'])->name('survay.location');
Route::post('/survay/store-location', [SurvayDataController::class,'storeLocation'])->name('store.location');

Route::get('/survay/brand', [survayPage::class, 'survayBrand'])->name('survay.brand');
Route::post('/survay/store-brand', [SurvayDataController::class,'storeBrand'])->name('store.brand');

Route::get('/survay/period', [survayPage::class, 'survayPeriod'])->name('survay.period');
Route::post('/survay/store-period', [SurvayDataController::class,'storePeriod'])->name('store.period');

Route::get('/survay/personal', [survayPage::class, 'survayPersonal'])->name('survay.personal');
Route::post('/survay/store-personal', [SurvayDataController::class,'confirmStorePersonal'])->name('store.personal');

// new
Route::get('/survay/final', [survayPage::class,'finalPageSurvay'])->name('survay.final');



Route::get('clear/survey', [SurvayDataController::class, 'clearSurvey'])->name('clear.survey');
// Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/blogger', [LoginController::class,'showBloggerLoginForm']);

Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/blogger', [RegisterController::class,'showBloggerRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin'])->name('login.admin');
Route::post('/login/blogger', [LoginController::class,'bloggerLogin']);

Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/blogger', [RegisterController::class,'createBlogger']);


// main-title
Route::post('main-title/upload',[ManageSlideController::class, 'upload'])->name('main-title.upload');
Route::post('main-title/update', [ManageSlideController::class, 'update'])->name('main-title.update');
Route::get('main-title/fetch', [ManageSlideController::class, 'fetch'])->name('main-title.fetch');
Route::get('main-title/delete', [ManageSlideController::class, 'delete'])->name('main-title.delete');


// Route::group(['middleware' => 'auth:blogger'], function () {
//     Route::view('/blogger', 'blogger');
// });

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin.home');

    Route::namespace('Admin')->as('admin.')->group(function () {
        Route::get('admin/manage-slide',[ManageSlideController::class, 'index'])->name('manage.slide');   

        Route::get('/survay/list', [SurvayDataController::class, 'surveyList'])->name('survey.list');
        Route::get('admin/survay', [SurvayDataController::class, 'index'])->name('survay');

        Route::get('admin/content', [ManageContentController::class, 'index'])->name('content');
        Route::post('admin/content/{id}/update', [ManageContentController::class, 'update'])->name('content.update');
    });
});

Route::get('logout', [AuthLoginController::class,'logout']);