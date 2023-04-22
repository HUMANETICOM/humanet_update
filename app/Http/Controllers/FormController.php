<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function showForm()
    {
        return view('auth.personalia.personalia');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
        'userID' => 'required|max:255',
        'civilstatus' => 'required|max:255',
        'language' => 'required|max:255',
        'height' => 'required|max:255',
        'weight' => 'required|max:255',
        'professions' => 'required|max:255',
        'otherCitizenship' => 'required|max:255',
        'PRN' => 'required|max:255',
        'PEA' => 'required|max:255',
        'Street' => 'required|max:255',
        'City' => 'required|max:255',
        'Province' => 'required|max:255',
        'PostalCode' => 'required|max:255',
        'CountryCode' => 'required|max:255',
        'SPN' => 'required|max:255',
        'SEA' => 'required|max:255',
        'Street2' => 'required|max:255',
        'City2' => 'required|max:255',
        'Province2' => 'required|max:255',
        'PostalCode2' => 'required|max:255',
        'CountryCode2' => 'required|max:255',
        'EPN' => 'required|max:255',
        'EEA' => 'required|max:255',
        'Street3' => 'required|max:255',
        'City3' => 'required|max:255',
        'Province3' => 'required|max:255',
        'PostalCode3' => 'required|max:255',
        'CountryCode3' => 'required|max:255',

    ], [
        'userID.required' => '',
        'civilstatus.required' => '',
        'language.required' => '',
        'height.required' => '',
        'weight.required' => '',
        'professions.required' => '',
        'therCitizenship.required' => '',
        'PRN.required' => '',
        'PEA.required' => '',
        'Street.required' => '',
        'City.required' => '',
        'Province.required' => '',
        'PostalCode.required' => '',
        'CountryCode.required' => '',
        'SPN.required' => '',
        'SEA.required' => '',
        'Street2.required' => '',
        'City2.required' => '',
        'Province2.required' => '',
        'PostalCode2.required' => '',
        'CountryCode2.required' => '',
        'EPN.required' => '',
        'EEA.required' => '',
        'Street3.required' => '',
        'City3.required' => '',
        'Province3.required' => '',
        'PostalCode3.required' => '',
        'CountryCode3.required' => '',

        
    ]);

    $formData = new FormData;
    $formData->userID = $request->userID;
    $formData->civilstatus = $request->civilstatus;
    $formData->language = $request->language;
    $formData->height = $request->height;
    $formData->weight = $request->weight;
    $formData->professions = $request->professions;
    $formData->otherCitizenship = $request->otherCitizenship;
    $formData->PRN = $request->PRN;
    $formData->PEA = $request->PEA;
    $formData->Street = $request->Street;
    $formData->City = $request->City;
    $formData->Province = $request->Province;
    $formData->PostalCode = $request->PostalCode;
    $formData->CountryCode = $request->CountryCode;
    $formData->SPN = $request->SPN;
    $formData->SEA = $request->SEA;
    $formData->Street2 = $request->Street2;
    $formData->City2 = $request->City2;
    $formData->Province2 = $request->Province2;
    $formData->PostalCode2 = $request->PostalCode2;
    $formData->CountryCode2 = $request->CountryCode2;
    $formData->EPN = $request->EPN;
    $formData->EEA = $request->EEA;
    $formData->Street3 = $request->Street3;
    $formData->City3 = $request->City3;
    $formData->Province3 = $request->Province3;
    $formData->PostalCode3 = $request->PostalCode3;
    $formData->CountryCode3 = $request->CountryCode3;
    $formData->save();

        return redirect()->route('contact')
        ->withSuccess('You have successfully registered & logged in!');
    }
}
