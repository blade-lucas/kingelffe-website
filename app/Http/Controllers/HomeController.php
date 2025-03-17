<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function showHomepage() : View
    {
        return view('V2.homepageV2');
    }
}
