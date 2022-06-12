<?php

namespace App\Models\groups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;


class Group extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','group_id'];


    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function members()
    {
        return $this->belongsToMany(User::class, 'group_user');
    }



}
