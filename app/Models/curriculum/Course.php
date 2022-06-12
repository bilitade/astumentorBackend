<?php

namespace App\Models\curriculum;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\curriculum\Type;

class Course extends Model
{

    use HasFactory,Searchable ;

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function year(){
        return $this->belongsTo(Year::class);
    }

    public function type(){

        return $this->hasOne(Type::class);
    }



    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'courseCode' => $this->courseCode,
              'courseName'=>$this->courseName


        ];
    }
}
