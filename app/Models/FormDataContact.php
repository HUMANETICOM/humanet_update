<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormDataContact extends Model
{
    use HasFactory;
    protected $table = 'form_data_contact';
    protected $fillable = [
        'fn',
        'ln',
        'pa',
        'province',
        'cor',
        'relationship',
        'iepn',
        'ieea',
        
        
    ];


}
