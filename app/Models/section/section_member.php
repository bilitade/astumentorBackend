<?php

namespace App\Models\section;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
class section_member extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'section_id',
    ];


    public function section()
    {
        return $this->belongsTo(section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
