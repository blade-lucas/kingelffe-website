<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DownloadController extends Controller
{
    public function showDownload() : View
    {
        return view('V2.downloadsV2');
    }
}
