<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable =['name','emai','phone','img','short_bio','about_me','bio_igm'];

    public function getImgAttribute($value)
    {
        return "images/uploaded_images/personalinfo_images/" . $value;
    }
}
