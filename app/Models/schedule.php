<?php

namespace App\Models;

use App\Models\section\section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'discription',
        'user_id',
        'type'
    ];


    public function section()
    {
        return $this->belongsToMany(section::class);
    }

}
