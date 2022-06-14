<?php

namespace App\Models\section;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
class section_user extends Model
{
    use HasFactory;
    protected $table ='section_user';
    protected $fillable = [
        'user_id',
        'section_id',
    ];



}
