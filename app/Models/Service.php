<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','isactive','icon','contribution'];

    public function projects(){

        return $this->hasMany(Project::class);
    }

    public function getIconAttribute($value)
    {
        return "images/uploaded_images/service_images/" . $value;
    }
}
