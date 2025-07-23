<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/digital-marketing-mastery-with-artificial-intelligence',[WebsiteController::class, 'course_digital_marketing'])->name('course_digital_marketing');
Route::get('/advanced-digital-marketing-boot-camp',[WebsiteController::class, 'advanced_digital_marketing_boot_camp'])->name('advanced_digital_marketing_boot_camp');
Route::get('/360-degree-digital-marketing-course',[WebsiteController::class, 'course_360_degree_digital_marketing'])->name('course_360_degree_digital_marketing');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-and-conditions', [WebsiteController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::get('/blogs', [WebsiteController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug?}', [WebsiteController::class, 'blogsVariation'])->name('blogsVaritaion');
Route::get('sitemap.xml', [WebsiteController::class, 'sitemap'])->name('sitemap');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/admin.php';