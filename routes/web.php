<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogMasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontendController;

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
})->name('index');

Route::get('/about', function () {
    return view('pages.frontend.about');
})->name('about');

Route::get('/service', function () {
    return view('pages.frontend.service');
})->name('service');

Route::get('/construction', function () {
    return view('pages.frontend.construction');
})->name('construction');

Route::get('/project_management', function () {
    return view('pages.frontend.project_management');
})->name('project_management');

Route::get('/valuation', function () {
    return view('pages.frontend.valuation');
})->name('valuation');

Route::get('/survey', function () {
    return view('pages.frontend.survey');
})->name('survey');

Route::get('/interior', function () {
    return view('pages.frontend.interior');
})->name('interior');

Route::get('/approval', function () {
    return view('pages.frontend.approval');
})->name('approval');

Route::get('/quality_survey', function () {
    return view('pages.frontend.quality_survey');
})->name('quality_survey');

Route::get('/project', function () {
    return view('pages.frontend.project');
})->name('project');

Route::get('/contact', function () {
    return view('pages.frontend.contact');
})->name('contact');

Route::get('/builders-in-trichy', function () {
    return view('pages.frontend.builders-in-trichy');
})->name('builders-in-trichy');

Route::get('/interior-designer-in-trichy', function () {
    return view('pages.frontend.interior-designer-in-trichy');
})->name('interior-designer-in-trichy');

Route::get('/construction-company-in-trichy', function () {
    return view('pages.frontend.construction-company-in-trichy');
})->name('construction-company-in-trichy');

Route::get('/civil-project-and-management-company-in-trichy', function () {
    return view('pages.frontend.civil-project-and-management-company-in-trichy');
})->name('civil-project-and-management-company-in-trichy');

Route::get('/home-interior-design', function () {
    return view('pages.frontend.home-interior-design');
})->name('home-interior-design');

Route::get('/blog', [FrontendController::class, 'blogindex'])->name('blog');

Route::get('/blog/filter/{id}/{name}', [FrontendController::class, 'blogfilter'])->name('blog-filter');

Route::get('/blog/search', [FrontendController::class, 'searchblog'])->name('blog-search');

Route::get('/{title}/{id}', [FrontendController::class, 'blogreadmore'])->name('read-blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Home - Prevent Back Browser Button - After Logout
Route::middleware(['prevent-back-history'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Change Password - Index
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/password_change', [ChangeProfileController::class, 'index_password'])->name('settings');

    // Change Password - Store
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork-technology/admin/password_update', [ChangeProfileController::class, 'update_password'])->name('change.password');

    // Profile - Index
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/profile_change', [ChangeProfileController::class, 'index_profile'])->name('profile');

    // PROFILE - STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork-technology/admin/profile_update', [ChangeProfileController::class, 'update_profile'])->name('change.profile');

    // BLOG MASTER CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master', [BlogMasterController::class, 'index'])->name('blog.master.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master/create', [BlogMasterController::class, 'create'])->name('blog.master.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zwork-technology/admin/blog/master/store', [BlogMasterController::class, 'store'])->name('blog.master.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master/edit/{id}', [BlogMasterController::class, 'edit'])->name('blog.master.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/master/update/{id}', [BlogMasterController::class, 'update'])->name('blog.master.update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/master/delete/{id}', [BlogMasterController::class, 'delete'])->name('blog.master.delete');
        // DESTROY
        Route::middleware(['auth:sanctum', 'verified'])->delete('/zwork-technology/admin/blog/master/destroy/{id}', [BlogMasterController::class, 'destroy'])->name('blog.master.destroy');
    });

    // BLOG MASTER CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master', [BlogMasterController::class, 'index'])->name('blog.master.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master/create', [BlogMasterController::class, 'create'])->name('blog.master.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zwork-technology/admin/blog/master/store', [BlogMasterController::class, 'store'])->name('blog.master.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/master/edit/{id}', [BlogMasterController::class, 'edit'])->name('blog.master.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/master/update/{id}', [BlogMasterController::class, 'update'])->name('blog.master.update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/master/delete/{id}', [BlogMasterController::class, 'delete'])->name('blog.master.delete');
        // DESTROY
        Route::middleware(['auth:sanctum', 'verified'])->delete('/zwork-technology/admin/blog/master/destroy/{id}', [BlogMasterController::class, 'destroy'])->name('blog.master.destroy');
    });

    // BLOG CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog', [BlogController::class, 'index'])->name('blog.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zwork-technology/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        // ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/active/{id}', [BlogController::class, 'active'])->name('blog.active');
        // DE ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/deactive/{id}', [BlogController::class, 'deactive'])->name('blog.deactive');
        // PIN
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/pin/{id}', [BlogController::class, 'pin'])->name('blog.pin');
        // UN PIN
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/unpin/{id}', [BlogController::class, 'unpin'])->name('blog.unpin');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
        // DESTROY
        Route::middleware(['auth:sanctum', 'verified'])->delete('/zwork-technology/admin/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    });

    // COMMENT CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/comment', [CommentController::class, 'index'])->name('blog.comment.index');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/admin/blog/comment/edit/{id}', [CommentController::class, 'edit'])->name('blog.comment.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/comment/update/{id}', [CommentController::class, 'update'])->name('blog.comment.update');
        // ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/comment/active/{id}', [CommentController::class, 'active'])->name('blog.comment.active');
        // DE ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/comment/deactive/{id}', [CommentController::class, 'deactive'])->name('blog.comment.deactive');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/admin/blog/comment/delete/{id}', [CommentController::class, 'delete'])->name('blog.comment.delete');
        // DESTROY
        Route::middleware(['auth:sanctum', 'verified'])->delete('/zwork-technology/admin/blog/comment/destroy/{id}', [CommentController::class, 'destroy'])->name('blog.comment.destroy');
    });

    // CONTACT CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/contact', [ContactController::class, 'index'])->name('contact.index');
        // ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/contact/reach_out/{id}', [ContactController::class, 'reachout'])->name('contact.reach_out');
    });

    // ENQUIRY CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zwork-technology/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
        // ACTIVE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zwork-technology/enquiry/reach_out/{id}', [EnquiryController::class, 'reachout'])->name('enquiry.reach_out');
    });
});

// BLOG CONTROLLER // WRITTER STORE
Route::post('/zwork-technology/admin/blog/writter/store', [BlogController::class, 'writterblog'])->name('blog.writter.store');
// COMMENT CONTROLLER  // STORE
Route::post('/zwork-technology/admin/blog/comment/store', [CommentController::class, 'store'])->name('blog.comment.store');
// CONTACT CONTROLLER // STORE
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
// ENQUIRY CONTROLLER // STORE
Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('enquiry.store');
