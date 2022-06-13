<?php

namespace App\Models\section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\curriculum\school;
use App\Models\curriculum\department;
use App\Models\curriculum\year;
use App\Models\curriculum\semester;
use App\Models\schedule;
class section extends Model
{
    use HasFactory;
    protected $fillable = ['sectionNmae','school_id','department_id','year_id','semester_id' ];



    public function school()
    {
        return $this->belongsTo(school::class);
    }


    public function department()
    {
        return $this->belongsTo(department::class);
    }


    public function year()
    {
        return $this->belongsTo(year::class);
    }

    public function semester()
    {
        return $this->belongsTo(semester::class);
    }

    public function schedule()
    {
        return $this->belongsToMany(schedule::class);
    }
}
