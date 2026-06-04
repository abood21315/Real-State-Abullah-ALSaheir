<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

// الصفحة الرئيسية → تحويل لتسجيل الدخول

Route::get('/', function () {
    return view('welcome');
});

// بعد تسجيل الدخول
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

// جميع صفحات الموقع تحتاج تسجيل دخول
Route::middleware(['auth'])->prefix('site')->name('site.')->group(function () {

    // الصفحة الرئيسية للموقع
    Route::get('/', [SiteController::class, 'index'])->name('index');

    // العقارات
    Route::get('/properties', [SiteController::class, 'properties'])->name('properties');

    // البحث
    Route::get('/search-properties', [SiteController::class, 'search_properties'])->name('search_properties');

    // تفاصيل العقار
    Route::get('/properties/{id}', [SiteController::class, 'show'])->name('show');

    // الوكلاء
    Route::get('/agents', [SiteController::class, 'agents'])->name('agents');

    // اتصل بنا
    Route::get('/contact-us', [SiteController::class, 'contact_us'])->name('contact_us');

    // إرسال الرسالة
    Route::post('/send', [SiteController::class, 'send'])->name('send');

});