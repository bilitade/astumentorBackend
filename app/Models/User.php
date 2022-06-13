<?php

namespace App\Models;

use App\Models\groups\Group;
use App\Models\curriculum\department;
use App\Models\curriculum\school;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;
use Spatie\Permission\Traits\HasRoles;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Messagable, Searchable,  HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'profile_photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
    ];
    public $appends=[
        'profile_image_url',
    ];




    public function getProfileImageUrlAttribute(){
        if($this->profile_photo){
            return asset('/uploads/profile_images/'.$this->profile_photo);
        }else{
            return "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y";


            // 'https://ui-avatars.com/api/?background=random&name='.urlencode($this->name);
        }

    }



    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user');
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }

    public function  resources(){

        return $this->hasMany(Resource::class);

    }



    public function department()
    {
        return $this->hasOne(department::class, 'admin_id');
    }

    public function school()
    {
        return $this->hasOne(school::class, 'admin_id');
    }

}
