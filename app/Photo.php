<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = array('project_id', 'description', 'photo', 'title', 'size');

    public function project() {
        return $this->belongsTo('App/Project');
    }

}
