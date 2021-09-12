<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable =['name','emai','phone','img','short_bio','about_me','bio_img','experience'];

    public function getImgAttribute($value)
    {
        return "images/uploaded_images/personalinfo_images/avatar/" . $value;
    }
    public function getBioImgAttribute($value)
    {
        return "images/uploaded_images/personalinfo_images/bioimages/" . $value;
    }
}
