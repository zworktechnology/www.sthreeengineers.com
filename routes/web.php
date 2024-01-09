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

Route::get('/privacy-policy', function () {
    return view('pages.frontend.privacy-policy');
})->name('privacy.policy');

Route::get('/terms-and-conditions', function () {
    return view('pages.frontend.terms-and-conditions');
})->name('terms.and.conditions');

Route::get('/cancellation-and-refund', function () {
    return view('pages.frontend.cancellation-and-refund');
})->name('cancellation.and.refund');

Route::get('/shipping-and-delivery', function () {
    return view('pages.frontend.shipping-and-delivery');
})->name('shipping.and.delivery');

Route::get('/contact-us', function () {
    return view('pages.frontend.contact-us');
})->name('contact.us');
Route::get('/about-us', function () {
    return view('pages.frontend.about-us');
})->name('about.us');

Route::get('/services', function () {
    return view('pages.frontend.service');
})->name('service');

Route::get('/web-development', function () {
    return view('pages.frontend.web-development');
})->name('web.development');

Route::get('/mobile-app-development', function () {
    return view('pages.frontend.mobile-app-development');
})->name('mobile.app.development');

Route::get('/ecommerce-soluation', function () {
    return view('pages.frontend.ecommerce-soluation');
})->name('ecommerce.soluation');

Route::get('/cms-crm-erp-soluation', function () {
    return view('pages.frontend.cms-crm-erp-soluation');
})->name('cms.crm.erp.soluation');

Route::get('/custom-software', function () {
    return view('pages.frontend.custom-software');
})->name('custom.software');

Route::get('/graphics-desiging', function () {
    return view('pages.frontend.graphics-desiging');
})->name('graphics.desiging');

Route::get('/digital-marketing', function () {
    return view('pages.frontend.digital-marketing');
})->name('digital.marketing');

Route::get('/social-media', function () {
    return view('pages.frontend.social-media');
})->name('social.media');

Route::get('/portfolio', function () {
    return view('pages.frontend.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.frontend.contact');
})->name('contact');

Route::get('/blog', [FrontendController::class, 'blogindex'])->name('blog');

Route::get('/blog/filter/{id}/{name}', [FrontendController::class, 'blogfilter'])->name('blog-filter');

Route::get('/blog/search', [FrontendController::class, 'searchblog'])->name('blog-search');

Route::get('/{title}/{id}', [FrontendController::class, 'blogreadmore'])->name('read-blog');

// SEO
Route::get('/web-development-company-in-trichy', function () {
    return view('pages.frontend.seo.web-development-company-in-trichy');})->name('web.development.company.in.trichy');

Route::get('/web-design-company-in-trichy', function () {
    return view('pages.frontend.seo.web-design-company-in-trichy');})->name('web.design.company.in.trichy');

// Route::get('/mobile-app-development-company-trichy', function () {
//     return view('pages.frontend.seo.mobile-app-development-company-trichy');})->name('mobile.app.development.company.trichy');

Route::get('/digital-marketing-company-in-trichy', function () {
    return view('pages.frontend.seo.digital-marketing-company-in-trichy');})->name('digital.marketing.company.in.trichy');

// Route::get('/social-media-marketing-company-trichy', function () {
//     return view('pages.frontend.seo.social-media-marketing-company-trichy');})->name('social.media.marketing.company.trichy');

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
