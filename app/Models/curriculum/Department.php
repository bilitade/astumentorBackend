<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name','school_id','description','objective','title'];

    public function school(){
        return $this->belongsTo(School::class);
    }
    public function user(){
        return $this->belongsTo(user::class, 'admin_id', 'id');
    }

    public function years(){
        return $this->hasMany(Year::class);
    }


}
