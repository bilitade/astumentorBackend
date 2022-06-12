<?php

namespace App\Models\curriculum;

use App\Models\curriculum\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name','id'];

    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public function course(){
        return $this->belongsTo(Course::class);
    }

}
