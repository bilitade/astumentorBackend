<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    
    public $incrementing = false;
    protected $keyType = 'string';

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function school(){
        return $this->belongsTo(School::class);
    }
    public function semesters(){
        return $this->hasMany(Semester::class);
    }




}
