<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

        protected $fillable = ['name','icon'];

        public function getIconAttribute($value)
        {
            return "images/uploaded_images/technologies_images/" . $value;
        }
}
