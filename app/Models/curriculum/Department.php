<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name','school_id','description','objective','title'];

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function years(){
        return $this->hasMany(Year::class);
    }


}
