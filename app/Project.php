<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = array('name', 'description', 'cover_image');

    public function photos() {
        return $this->hasMany('App\Photo');
    }
    
}
