<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use HasFactory;
     public $timestamps=false;

    public function survey() {
        return $this->belongsTo('App\Models\Survey','id');
    }
}
