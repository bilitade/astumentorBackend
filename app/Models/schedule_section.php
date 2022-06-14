<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule_section extends Model
{
    use HasFactory;
    protected $table = 'schedule_section';
    protected $fillable = [
        'schedule_id',
        'section_id',

    ];

}
