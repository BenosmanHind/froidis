<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
     protected $fillable = [
        'entreprise',
        'RC',
        'NIF',
        'carte',
        'wilaya',
        'address',
        'phone',
    ];
}
