<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {  return view('construction_website.about');})->name('about');
Route::get('/', function () {  return view('construction_website.index');})->name('index');
Route::get('/equipment', function () {  return view('construction_website.equipment');})->name('equipment');
Route::get('/faq', function () {  return view('construction_website.faq');})->name('faq');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
