<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\DoctorController;


Route::get('/', function () {
    return view('platform.homepage');
});

Auth::routes();

// Platform HomePage
Route::get('/homepage', function () {
    return view('platform.homepage');
});
// Team
Route::get('/team/profile/show/{id}', [App\Http\Controllers\DoctorController::class, 'show'])->name('doctors.show');

// Platform infocategories
Route::get('/infocategories', function () {
    return view('platform.infocategories');
});

// Platform infocategory
Route::get('/infocategory/infocategories/{id}', [App\Http\Controllers\InfocategoriesController::class, 'show'])->name('platform.infocategory.show');
// Platform singlepost
Route::get('/infocategory/singlepost/{id}', [App\Http\Controllers\SinglePostController::class, 'show'])->name('platform.singlepost.show');

// Platform rescategories
Route::get('/rescategories', function () {
    return view('platform.rescategories');
});

// Platform rescategory
Route::get('/rescategory/rescategories/{id}', [App\Http\Controllers\RescategoriesController::class, 'show'])->name('platform.rescategory.show');

// Platform singleres
Route::get('/rescategory/singleres/{id}', [App\Http\Controllers\SingleResController::class, 'show'])->name('platform.singleres.show');

// Platform videoscategories
Route::get('/videoscategories', function () {
    return view('platform.videoscategories');
});

// Platform videocategory
Route::get('/videoscategory/videoscategories/{id}', [App\Http\Controllers\VideocategoriesController::class, 'show'])->name('platform.videoscategory.show');

// Platform singlevideo
Route::get('/videoscategory/singlevideo/{id}', [App\Http\Controllers\SingleVideoController::class, 'show'])->name('platform.singlevideo.show');

// Platform per event
Route::get('/per_events', function () {
    return view('platform.per_events.events');
});


// Platform single event
Route::get('/per_events/per_event/{id}', [App\Http\Controllers\Showsingleevent::class, 'show'])->name('platform.per_events.event.show');

// Platform non event
Route::get('/non_events', function () {
    return view('platform.non_events.events');
});


// Platform single non_event
Route::get('/per_events/non_event/{id}', [App\Http\Controllers\ShownoneventController::class, 'show'])->name('platform.non_events.event.show');

// Platform fut event
Route::get('/fut_events', function () {
    return view('platform.fut_events.events');
});

// Platform Doctors
Route::get('/team', function () {
return view('doctors.team');
});
Route::get('/team/profile', function () {
return view('doctors.show');
});


// Manager Routes
Route::middleware(['auth', 'user-access:manager'])->group(function () {

Route::get('manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager_dashboard.home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Libraries
Route::get('/manager/dashboard/libraries', [App\Http\Controllers\LibraryController::class, 'index'])->name('manager_dashboard.libraries.index');
Route::get('/manager/dashboard/libraries/create', [App\Http\Controllers\LibraryController::class, 'create'])->name('manager_dashboard.libraries.create');
Route::post('/manager/dashboard/libraries/store', [App\Http\Controllers\LibraryController::class, 'store'])->name('manager_dashboard.libraries.store');
Route::get('/manager/dashboard/libraries/edit/{id}', [App\Http\Controllers\LibraryController::class, 'edit'])->name('manager_dashboard.libraries.edit');
Route::put('/manager/dashboard/libraries/update/{id}', [App\Http\Controllers\LibraryController::class, 'update'])->name('manager_dashboard.libraries.update');
Route::delete('/manager/dashboard/libraries/destroy/{id}', [App\Http\Controllers\LibraryController::class, 'destroy'])->name('manager_dashboard.libraries.destroy');

// Dashboard Doctors
Route::get('/manager/dashboard/doctors', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctors.index');
Route::get('/manager/dashboard/doctors/create', [App\Http\Controllers\DoctorController::class, 'create'])->name('doctors.create');
Route::post('/manager/dashboard/doctors/store', [App\Http\Controllers\DoctorController::class, 'store'])->name('doctors.store');
Route::get('/manager/dashboard/doctors/edit/{id}', [App\Http\Controllers\DoctorController::class, 'edit'])->name('doctors.edit');
Route::put('/manager/dashboard/doctors/update/{id}', [App\Http\Controllers\DoctorController::class, 'update'])->name('doctors.update');
Route::delete('/manager/dashboard/doctors/destroy/{id}', [App\Http\Controllers\DoctorController::class, 'destroy'])->name('doctors.destroy');

// Dashboard He_info_Categories
Route::get('/manager/dashboard/info_categories', [App\Http\Controllers\HeInfoCategoryController::class, 'index'])->name('manager_dashboard.healthy.he_info_categories.index');
Route::get('/manager/dashboard/info_categories/create', [App\Http\Controllers\HeInfoCategoryController::class, 'create'])->name('manager_dashboard.healthy.he_info_categories.create');
Route::post('/manager/dashboard/info_categories/store', [App\Http\Controllers\HeInfoCategoryController::class, 'store'])->name('manager_dashboard.healthy.he_info_categories.store');
Route::get('/manager/dashboard/info_categories/edit/{id}', [App\Http\Controllers\HeInfoCategoryController::class, 'edit'])->name('manager_dashboard.healthy.he_info_categories.edit');
Route::put('/manager/dashboard/info_categories/update/{id}', [App\Http\Controllers\HeInfoCategoryController::class, 'update'])->name('manager_dashboard.healthy.he_info_categories.update');
Route::delete('/manager/dashboard/info_categories/destroy/{id}', [App\Http\Controllers\HeInfoCategoryController::class, 'destroy'])->name('manager_dashboard.healthy.he_info_categories.destroy');

// Dashboard He_info_Articles
Route::get('/manager/dashboard/info_articles', [App\Http\Controllers\HeInfoArticleController::class, 'index'])->name('manager_dashboard.healthy.he_info_articles.index');
Route::get('/manager/dashboard/info_articles/create', [App\Http\Controllers\HeInfoArticleController::class, 'create'])->name('manager_dashboard.healthy.he_info_articles.create');
Route::post('/manager/dashboard/info_articles/store', [App\Http\Controllers\HeInfoArticleController::class, 'store'])->name('manager_dashboard.healthy.he_info_articles.store');
Route::get('/manager/dashboard/info_articles/edit/{id}', [App\Http\Controllers\HeInfoArticleController::class, 'edit'])->name('manager_dashboard.healthy.he_info_articles.edit');
Route::put('/manager/dashboard/info_articles/update/{id}', [App\Http\Controllers\HeInfoArticleController::class, 'update'])->name('manager_dashboard.healthy.he_info_articles.update');
Route::delete('/manager/dashboard/info_articles/destroy/{id}', [App\Http\Controllers\HeInfoArticleController::class, 'destroy'])->name('manager_dashboard.healthy.he_info_articles.destroy');


// Dashboard Res_info_Categories
Route::get('/manager/dashboard/res_categories', [App\Http\Controllers\ResInfoCategoryController::class, 'index'])->name('manager_dashboard.healthy.res_info_categories.index');
Route::get('/manager/dashboard/res_categories/create', [App\Http\Controllers\ResInfoCategoryController::class, 'create'])->name('manager_dashboard.healthy.res_info_categories.create');
Route::post('/manager/dashboard/res_categories/store', [App\Http\Controllers\ResInfoCategoryController::class, 'store'])->name('manager_dashboard.healthy.res_info_categories.store');
Route::get('/manager/dashboard/res_categories/edit/{id}', [App\Http\Controllers\ResInfoCategoryController::class, 'edit'])->name('manager_dashboard.healthy.res_info_categories.edit');
Route::put('/manager/dashboard/res_categories/update/{id}', [App\Http\Controllers\ResInfoCategoryController::class, 'update'])->name('manager_dashboard.healthy.res_info_categories.update');
Route::delete('/manager/dashboard/res_categories/destroy/{id}', [App\Http\Controllers\ResInfoCategoryController::class, 'destroy'])->name('manager_dashboard.healthy.res_info_categories.destroy');

// Dashboard Res_info_Articles
Route::get('/manager/dashboard/res_articles', [App\Http\Controllers\ResInfoArticleController::class, 'index'])->name('manager_dashboard.healthy.res_info_articles.index');
Route::get('/manager/dashboard/res_articles/create', [App\Http\Controllers\ResInfoArticleController::class, 'create'])->name('manager_dashboard.healthy.res_info_articles.create');
Route::post('/manager/dashboard/res_articles/store', [App\Http\Controllers\ResInfoArticleController::class, 'store'])->name('manager_dashboard.healthy.res_info_articles.store');
Route::get('/manager/dashboard/res_articles/edit/{id}', [App\Http\Controllers\ResInfoArticleController::class, 'edit'])->name('manager_dashboard.healthy.res_info_articles.edit');
Route::put('/manager/dashboard/res_articles/update/{id}', [App\Http\Controllers\ResInfoArticleController::class, 'update'])->name('manager_dashboard.healthy.res_info_articles.update');
Route::delete('/manager/dashboard/res_articles/destroy/{id}', [App\Http\Controllers\ResInfoArticleController::class, 'destroy'])->name('manager_dashboard.healthy.res_info_articles.destroy');

// Dashboard videos_Categories
Route::get('/manager/dashboard/videos_categories', [App\Http\Controllers\VideoCategoryController::class, 'index'])->name('manager_dashboard.healthy.videos_categories.index');
Route::get('/manager/dashboard/videos_categories/create', [App\Http\Controllers\VideoCategoryController::class, 'create'])->name('manager_dashboard.healthy.videos_categories.create');
Route::post('/manager/dashboard/videos_categories/store', [App\Http\Controllers\VideoCategoryController::class, 'store'])->name('manager_dashboard.healthy.videos_categories.store');
Route::get('/manager/dashboard/videos_categories/edit/{id}', [App\Http\Controllers\VideoCategoryController::class, 'edit'])->name('manager_dashboard.healthy.videos_categories.edit');
Route::put('/manager/dashboard/videos_categories/update/{id}', [App\Http\Controllers\VideoCategoryController::class, 'update'])->name('manager_dashboard.healthy.videos_categories.update');
Route::delete('/manager/dashboard/videos_categories/destroy/{id}', [App\Http\Controllers\VideoCategoryController::class, 'destroy'])->name('manager_dashboard.healthy.videos_categories.destroy');

// Dashboard videos
Route::get('/manager/dashboard/videos', [App\Http\Controllers\VideoController::class, 'index'])->name('manager_dashboard.healthy.videos.index');
Route::get('/manager/dashboard/videos/create', [App\Http\Controllers\VideoController::class, 'create'])->name('manager_dashboard.healthy.videos.create');
Route::post('/manager/dashboard/videos/store', [App\Http\Controllers\VideoController::class, 'store'])->name('manager_dashboard.healthy.videos.store');
Route::get('/manager/dashboard/videos/edit/{id}', [App\Http\Controllers\VideoController::class, 'edit'])->name('manager_dashboard.healthy.videos.edit');
Route::put('/manager/dashboard/videos/update/{id}', [App\Http\Controllers\VideoController::class, 'update'])->name('manager_dashboard.healthy.videos.update');
Route::delete('/manager/dashboard/videos/destroy/{id}', [App\Http\Controllers\VideoController::class, 'destroy'])->name('manager_dashboard.healthy.videos.destroy');

// Dashboard per_events
    Route::get('/manager/dashboard/events', [App\Http\Controllers\PerEventController::class, 'index'])->name('manager_dashboard.events.per_events.index');
    Route::get('/manager/dashboard/events/create', [App\Http\Controllers\PerEventController::class, 'create'])->name('manager_dashboard.events.per_events.create');
    Route::post('/manager/dashboard/events/store', [App\Http\Controllers\PerEventController::class, 'store'])->name('manager_dashboard.events.per_events.store');
    Route::get('/manager/dashboard/events/edit/{id}', [App\Http\Controllers\PerEventController::class, 'edit'])->name('manager_dashboard.events.per_events.edit');
    Route::put('/manager/dashboard/events/update/{id}', [App\Http\Controllers\PerEventController::class, 'update'])->name('manager_dashboard.events.per_events.update');
    Route::delete('/manager/dashboard/events/destroy/{id}', [App\Http\Controllers\PerEventController::class, 'destroy'])->name('manager_dashboard.events.per_events.destroy');

    // Dashboard non_events
    Route::get('/manager/dashboard/non_events', [App\Http\Controllers\NonEventController::class, 'index'])->name('manager_dashboard.events.non_events.index');
    Route::get('/manager/dashboard/non_events/create', [App\Http\Controllers\NonEventController::class, 'create'])->name('manager_dashboard.events.non_events.create');
    Route::post('/manager/dashboard/non_events/store', [App\Http\Controllers\NonEventController::class, 'store'])->name('manager_dashboard.events.non_events.store');
    Route::get('/manager/dashboard/non_events/edit/{id}', [App\Http\Controllers\NonEventController::class, 'edit'])->name('manager_dashboard.events.non_events.edit');
    Route::put('/manager/dashboard/non_events/update/{id}', [App\Http\Controllers\NonEventController::class, 'update'])->name('manager_dashboard.events.non_events.update');
    Route::delete('/manager/dashboard/non_events/destroy/{id}', [App\Http\Controllers\NonEventController::class, 'destroy'])->name('manager_dashboard.events.non_events.destroy');

    // Dashboard fut_events
    Route::get('/manager/dashboard/fut_events', [App\Http\Controllers\FutEventController::class, 'index'])->name('manager_dashboard.events.fut_events.index');
    Route::get('/manager/dashboard/fut_events/create', [App\Http\Controllers\FutEventController::class, 'create'])->name('manager_dashboard.events.fut_events.create');
    Route::post('/manager/dashboard/fut_events/store', [App\Http\Controllers\FutEventController::class, 'store'])->name('manager_dashboard.events.fut_events.store');
    Route::get('/manager/dashboard/fut_events/edit/{id}', [App\Http\Controllers\FutEventController::class, 'edit'])->name('manager_dashboard.events.fut_events.edit');
    Route::put('/manager/dashboard/fut_events/update/{id}', [App\Http\Controllers\FutEventController::class, 'update'])->name('manager_dashboard.events.fut_events.update');
    Route::delete('/manager/dashboard/fut_events/destroy/{id}', [App\Http\Controllers\FutEventController::class, 'destroy'])->name('manager_dashboard.events.fut_events.destroy');

});








// Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

// Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');

Route::get('admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('admin_dashboard.home');

});

// Users Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

