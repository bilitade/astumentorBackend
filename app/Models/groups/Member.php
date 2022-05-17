<?php

namespace App\Models\groups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use App\Models\groups\Group;

class Member extends Model
{
    use HasFactory;


    function group(){
      $this->belongsToMany(Group::class);

    }

}