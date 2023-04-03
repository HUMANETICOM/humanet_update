<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderFooterController extends Controller
{
    public function header()
    {
        return view('auth.header.header');
    }
    public function footer()
    {
        return view('auth.header.footer');
    }
}
