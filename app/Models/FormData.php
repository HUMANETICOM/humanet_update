<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormData extends Model
{
    use HasFactory;
    protected $table = 'form_data';
    protected $fillable = [
        'userID',
        'civilstatus',
        'race',
        'language',
        'height',
        'weight',
        'professions',
        'otherCitizenship',
        'prn',
        'pea',
        'street',
        'city',
        'province',
        'postalcode',
        'countrycode',
        'spn',
        'sea',
        'street2',
        'city2',
        'province2',
        'postalcode2',
        'countrycode2',
        'epn',
        'eea',
        'street3',
        'city3',
        'province3',
        'postalcode3',
        'countrycode3',




    ];
}