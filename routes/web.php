<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/digital-marketing-mastery-with-artificial-intelligence', [WebsiteController::class, 'course_digital_marketing'])->name('course_digital_marketing');
Route::get('/advanced-digital-marketing-boot-camp', [WebsiteController::class, 'advanced_digital_marketing_boot_camp'])->name('advanced_digital_marketing_boot_camp');
Route::get('/360-degree-digital-marketing-course', [WebsiteController::class, 'course_360_degree_digital_marketing'])->name('course_360_degree_digital_marketing');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-and-conditions', [WebsiteController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::get('/blogs', [WebsiteController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug?}', [WebsiteController::class, 'blogsVariation'])->name('blogsVaritaion');
Route::get('sitemap.xml', [WebsiteController::class, 'sitemap'])->name('sitemap');

Route::post('/enquiry', [WebsiteController::class, 'store_enquery'])->name('enquiry.store');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/reviews', [WebsiteController::class, 'reviews'])->name('reviews');
Route::get('/placement', [WebsiteController::class, 'placement'])->name('placement');
Route::get('/courses', [WebsiteController::class, 'courseList'])->name('course.list');

Route::get('/digital-marketing-course-in-bangalore', [WebsiteController::class, 'new_digital_marketing'])->name('new_digital_marketing');
Route::get('/seo-course-in-bangalore', [WebsiteController::class, 'seo_course_in_bangalore'])->name('seo_course_in_bangalore');
Route::get('/ppc-course-in-bangalore', [WebsiteController::class, 'ppc_course_in_bangalore'])->name('ppc_course_in_bangalore');
Route::get('/social-media-marketing', [WebsiteController::class, 'social_media_marketing'])->name('social_media_marketing');


Route::get('/digital-marketing-marathahalli', [WebsiteController::class, 'digital_marketing_marathahalli'])->name('digital_marketing_marathahalli');

Route::get('/digital-marketing-btm-layout', [WebsiteController::class, 'digital_marketing_btm_layout'])->name('digital_marketing_btm_layout');

Route::get('/digital-marketing-indiranagar', [WebsiteController::class, 'digital_marketing_indiranagar'])->name('digital_marketing_indiranagar');

Route::get('/digital-marketing-koramangala', [WebsiteController::class, 'digital_marketing_koramangala'])->name('digital_marketing_koramangala');

Route::get('/digital-marketing-yelahanka', [WebsiteController::class, 'digital_marketing_yelahanka'])->name('digital_marketing_yelahanka');

Route::get('/digital-marketing-malleswaram', [WebsiteController::class, 'digital_marketing_malleswaram'])->name('digital_marketing_malleswaram');

Route::get('/digital-marketing-hsr-layout', [WebsiteController::class, 'digital_marketing_hsr_layout'])->name('digital_marketing_hsr_layout');

Route::get('/digital-marketing-rajajinagar', [WebsiteController::class, 'digital_marketing_rajajinagar'])->name('digital_marketing_rajajinagar');

Route::get('/digital-marketing-vijayanagar', [WebsiteController::class, 'digital_marketing_vijayanagar'])->name('digital_marketing_vijayanagar');

Route::get('/digital-marketing-jayanagar', [WebsiteController::class, 'digital_marketing_jayanagar'])->name('digital_marketing_jayanagar');

Route::get('/digital-marketing-hebbal', [WebsiteController::class, 'digital_marketing_hebbal'])->name('digital_marketing_hebbal');

Route::get('/digital-marketing-electronic-city', [WebsiteController::class, 'digital_marketing_electronic_city'])->name('digital_marketing_electronic_city');

Route::get('/digital-marketing-ombr-layout', [WebsiteController::class, 'digital_marketing_ombr_layout'])->name('digital_marketing_ombr_layout');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/admin.php';
