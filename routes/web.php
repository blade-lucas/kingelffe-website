<?php

use Illuminate\Support\Facades\Route;

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

//V2 pages
Route::get('/homepageV2', function () {
    return view('V2/homepageV2');
});

Route::get('/aboutV2', function () {
    return view('V2/aboutV2');
});

Route::get('/galleryV2', function () {
    return view('V2/galleryV2');
});

Route::get('/serverV2', function () {
    return view('V2/serverV2');
});

Route::get('/downloadsV2', function () {
    return view('V2/downloadsV2');
});

Route::get('wikiV2', function () {
    return view('V2/wikiV2');
});

//Redirects to external sites
Route::get('youtube', function () {
    return Redirect('https://www.youtube.com/kingelffe');
});

Route::get('twitch', function () {
    return Redirect('https://www.twitch.tv/kingelffe');
});

Route::get('twitter', function () {
    return Redirect('https://x.com/kingelffe');
});

Route::get('instagram', function () {
    return Redirect('https://www.instagram.com/kingelffeyt/');
});

Route::get('discord', function () {
    return Redirect('https://dsc.gg/kingelffe');
});
