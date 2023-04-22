<?php

namespace App\Http\Controllers;

use App\Models\FormDataContact;
use App\Models\FormData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonaliaController extends Controller
{
    public function personalia()
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
        'prn' => 'required|max:255',
        'pea' => 'required|max:255',
        'street' => 'required|max:255',
        'city' => 'required|max:255',
        'province' => 'required|max:255',
        'postalcode' => 'required|max:255',
        'countrycode' => 'required|max:255',
        'spn' => 'required|max:255',
        'sea' => 'required|max:255',
        'street2' => 'required|max:255',
        'city2' => 'required|max:255',
        'province2' => 'required|max:255',
        'postalcode2' => 'required|max:255',
        'countrycode2' => 'required|max:255',
    ], [
        'userID.required' => '',
        'civilstatus.required' => '',
        'language.required' => '',
        'height.required' => '',
        'weight.required' => '',
        'professions.required' => '',
        'otherCitizenship.required' => '',
        'prn.required' => '',
        'pea.required' => '',
        'street.required' => '',
        'city.required' => '',
        'province.required' => '',
        'postalcode.required' => '',
        'countrycode.required' => '',
        'spn.required' => '',
        'sea.required' => '',
        'street2.required' => '',
        'city2.required' => '',
        'province2.required' => '',
        'postalcode2.required' => '',
        'countrycode2.required' => '',
    ]);

    $formData = new FormData;
    $formData->userID = $request->userID;
    $formData->civilstatus = $request->civilstatus;
    $formData->language = $request->language;
    $formData->height = $request->height;
    $formData->weight = $request->weight;
    $formData->professions = $request->professions;
    $formData->otherCitizenship = $request->otherCitizenship;
    $formData->prn = $request->prn;
    $formData->pea = $request->pea;
    $formData->street = $request->street;
    $formData->city = $request->city;
    $formData->province = $request->province;
    $formData->postalcode = $request->postalcode;
    $formData->countrycode = $request->countrycode;
    $formData->spn = $request->spn;
    $formData->sea = $request->sea;
    $formData->street2 = $request->street2;
    $formData->city2 = $request->city2;
    $formData->province2 = $request->province2;
    $formData->postalcode2 = $request->postalcode2;
    $formData->countrycode2 = $request->countrycode2;
    $formData->epn = $request->epn;
    $formData->eea = $request->eea;
    $formData->street3 = $request->street3;
    $formData->city3 = $request->city3;
    $formData->province3 = $request->province3;
    $formData->postalcode3 = $request->postalcode3;
    $formData->countrycode3 = $request->countrycode3;
    $formData->save();

        return redirect()->route('contact')
        ->withSuccess('You have successfully registered & logged in!');
    }

    public function contact()
    {
        return view('auth.personalia.contact');
    }
    public function submitFormContact(Request $request)
    {
        $validatedData = $request->validate([
        'fn' => 'required|max:255',
        'ln' => 'required|max:255',
        'pa' => 'required|max:255',
        'province' => 'required|max:255',
        'cor' => 'required|max:255',
        'relationship' => 'required|max:255',
        'iepn' => 'required|max:255',
        'ieea' => 'required|max:255',
        
    ], [
        'fn.required' => '',
        'ln.required' => '',
        'pa.required' => '',
        'province.required' => '',
        'cor.required' => '',
        'relationship.required' => '',
        'iepn.required' => '',
        'ieea.required' => '',
        
    ]);

    $formData = new FormDataContact;
    $formData->fn = $request->fn;
    $formData->ln = $request->civilstatus;
    $formData->pa = $request->language;
    $formData->province = $request->height;
    $formData->cor = $request->weight;
    $formData->relationship = $request->professions;
    $formData->iepn = $request->otherCitizenship;
    $formData->ieea = $request->prn;
    
    
    $formData->save();

        return redirect()->route('id')
        ->withSuccess('You have successfully registered & logged in!');
    }




    public function id()
    {
        return view('auth.personalia.id');
    }

    public function insurance()
    {
        return view('auth.personalia.insurance');
    }

    public function bmc()
    {
        return view('auth.personalia.bmc');
    }

    public function smi()
    {
        return view('auth.personalia.smi');
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
     
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
