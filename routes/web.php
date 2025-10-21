<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', fn () => view('welcome'));
Route::get('/about', fn () => view('construction_website.about'))->name('about');
Route::get('/', fn () => view('construction_website.index'))->name('index');
Route::get('/equipment', fn () => view('construction_website.equipment'))->name('equipment');
Route::get('/faq', fn () => view('construction_website.faq'))->name('faq');
Route::get('/project', fn ()=> view('construction_website.project'))->name('project');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/projects/{slug}', function ($slug) {
    $jsonPath = resource_path('views/construction_website/data/projects.json');
    $projects = json_decode(file_get_contents($jsonPath), true);

    $project = collect($projects)->firstWhere('slug', $slug);

    if (!$project) {
        abort(404);
    }

    return view('construction_website.project_detail', ['project' => $project]);
})->name('project_detail');