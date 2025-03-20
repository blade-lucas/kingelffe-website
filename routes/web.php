<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SocialsController;
use App\Http\Controllers\WikiController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//V2 pages
Route::get('/homepageV2', [HomeController::class, 'showHomepage'])->name('/');
Route::get('/aboutV2', [AboutController::class, 'showAbout'])->name('about');
Route::get('/galleryV2', [GalleryController::class, 'showGallery'])->name('gallery');
Route::get('/serverV2', [ServerController::class, 'showServer'])->name('server');
Route::get('/serverV2/paginate', [ServerController::class, 'paginateModerators']);
Route::get('/downloadsV2', [DownloadController::class, 'showDownload'])->name('downloads');
Route::get('/wikiV2', [WikiController::class, 'showWiki'])->name('wiki');

//Socials
Route::get('/youtube', [SocialsController::class, 'youtubeRedirect'])->name('youtube');
Route::get('/twitch', [SocialsController::class, 'twitchRedirect'])->name('twitch');
Route::get('/twitter', [SocialsController::class, 'twitterRedirect'])->name('twitter');
Route::get('/instagram', [SocialsController::class, 'instagramRedirect'])->name('instagram');
Route::get('/discord', [SocialsController::class, 'discordRedirect'])->name('discord');

//TODO Refactor all routes below
Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/server', function () {
    return view('server');
});

Route::get('/downloads', function () {
    return view('downloads');
});

//experimental wiki route
Route::get('/wiki/{category}', function () {
    return view('Wiki/tutorials/getting-server-roles');
});

Route::get('/get-wiki-entries/{category}', function ($category) {
    $wikiEntries = DB::table('wiki')
        ->where('wiki_category', $category)
        ->get();
    if ($wikiEntries->isEmpty()) {
        return response()->json(['error' => 'No entries found for this category.'], 404);
    }
    return response()->json($wikiEntries);
});
