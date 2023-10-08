<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messagefile extends Model
{
    use HasFactory;
    public function files(){
        return $this->hasMany(Messagefile::class);
    }
}
