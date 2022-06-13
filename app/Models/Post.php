<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\groups\Group;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'image',
        'user_id',
        'group_id'


    ];

    public $appends=[
        'image_url',
        'human_readable_created_at'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function getImageUrlAttribute(){
        return asset('/uploads/posts_images/'.$this->image);
    }

    public function getHumanReadableCreatedAtAttribute(){
        return $this->created_at->diffForHumans();
    }


}
