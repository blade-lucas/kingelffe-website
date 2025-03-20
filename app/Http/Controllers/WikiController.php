<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WikiController extends Controller
{
    public function showWiki() : View
    {
        return view('V2.wikiV2');
    }
}
