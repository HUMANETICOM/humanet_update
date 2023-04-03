<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class frontend extends Controller
{
    public function humaehealth()
    {
        return view('auth.frontpage.humaehealth');
    }
    public function aboutus()
    {
        return view('auth.frontpage.aboutus');
    }
    public function pricing()
    {
        return view('auth.frontpage.pricing');
    }
    public function ourcoins()
    {
        return view('auth.frontpage.ourcoins');
    }
}
