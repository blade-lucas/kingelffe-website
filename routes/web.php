<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SocialsController;
use App\Http\Controllers\WikiController;
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

//Wiki Routes
Route::get('/wiki/welcome', function () {
    return view('Wiki/serverInfo/welcome');
});

Route::get('/wiki/about-the-server', function () {
    return view('Wiki/serverInfo/about-the-server');
});

Route::get('/wiki/rules', function () {
    return view('Wiki/serverInfo/rules');
});

Route::get('/wiki/plugins', function () {
    return view('Wiki/serverInfo/plugins');
});

Route::get('/wiki/support', function () {
    return view('Wiki/serverInfo/support');
});

Route::get('/wiki/plugins-overview', function () {
    return view('Wiki/plugins/overview');
});

Route::get('/wiki/vanilla-tweaks', function () {
    return view('Wiki/plugins/vanillaTweaks');
});

Route::get('/wiki/essentialsx', function () {
    return view('Wiki/plugins/essentialsX');
});

Route::get('/wiki/ez-chest-shop', function () {
    return view('Wiki/plugins/ezChestShop');
});

Route::get('/wiki/geyser', function () {
    return view('Wiki/plugins/geyser');
});

Route::get('/wiki/xclaim', function () {
    return view('Wiki/plugins/xclaim');
});

Route::get('/wiki/moderation', function () {
    return view('Wiki/plugins/moderation');
});

Route::get('/wiki/basic-commands', function () {
    return view('Wiki/commands/basic');
});

Route::get('/wiki/economy-commands', function () {
    return view('Wiki/commands/economy');
});

Route::get('/wiki/support-commands', function () {
    return view('Wiki/commands/support');
});

Route::get('/wiki/how-to-join', function () {
    return view('Wiki/tutorials/how-to-join');
});

Route::get('/wiki/making-a-shop', function () {
    return view('Wiki/tutorials/making-a-shop');
});

Route::get('/wiki/land-claims', function () {
    return view('Wiki/tutorials/land-claims');
});

Route::get('/wiki/getting-server-roles', function () {
    return view('Wiki/tutorials/getting-server-roles');
});

//experimental wiki route
Route::get('/wiki/{category}', function () {
    return view('Wiki/tutorials/getting-server-roles');
});
