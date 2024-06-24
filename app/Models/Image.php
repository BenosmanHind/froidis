<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function actualite(){
        return $this->belongsTo(Actualite::class,'actualite_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
