<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SocialsController extends Controller
{
    public function youtubeRedirect() : RedirectResponse
    {
        return Redirect('https://www.youtube.com/kingelffe');
    }
    public function twitchRedirect() : RedirectResponse
    {
        return Redirect('https://www.twitch.tv/kingelffe');
    }
    public function twitterRedirect() : RedirectResponse
    {
        return Redirect('https://x.com/kingelffe');
    }
    public function instagramRedirect() : RedirectResponse
    {
        return Redirect('https://www.instagram.com/kingelffeyt/');
    }
    public function discordRedirect() : RedirectResponse
    {
        return Redirect('https://dsc.gg/kingelffe');
    }
}
