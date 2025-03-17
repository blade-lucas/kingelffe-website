<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function showAbout() : View
    {
        return view('V2.aboutV2');
    }
}
