<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\curriculum\Department;
use App\Models\curriculum\Course;
use App\Models\user;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','vm','title','admin_id'];


    public function departments(){
        return $this->hasMany(Department::class);
    }

    public function courses(){

        return $this->hasMany(Course::class);
    }

    public function years(){

        return $this->hasMany(Course::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }


}
