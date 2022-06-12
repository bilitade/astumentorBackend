<?php

namespace App\Models\curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceItem extends Model
{
    use HasFactory;
    protected $fillable = ['resource_id','uploadeBy','size','location','name'];

}
