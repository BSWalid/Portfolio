<?php

namespace App\Models;

use App\Http\Controllers\ServiceController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','isactive','img','contibution'];



    public function service(){

        return $this->belongsTo(Service::class);
    }
}
