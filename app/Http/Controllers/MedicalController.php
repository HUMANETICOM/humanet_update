<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function medical()
    {
        return view('auth.medicalForms.medical');
    }
}
