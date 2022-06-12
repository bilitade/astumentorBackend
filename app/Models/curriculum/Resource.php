<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['name','location','user_id','size','course_id'];


    public function course(){

        return $this->belongsTo(Course::class);

    }

    public function  user(){

        return $this->belongsTo(User::class);

    }


}
