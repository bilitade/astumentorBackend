<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';


    public function year(){
        return $this->belongsTo(Year::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }


}
