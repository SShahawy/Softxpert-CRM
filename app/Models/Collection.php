<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public function entity_data()
    {
        return $this->hasMany('App\Models\EntityData');
    }

    public function entities()
    {
        return $this->hasMany('App\Models\Entities');
    }
    public function system()
    {
        return $this->hasMany('App\Models\Entities')->belongsTo('App\Models\Systems');
    }
    public function datatype()
    {
        return $this->hasMany('App\Models\dataTypes');
    }
    public function systems()
    {
        return $this->hasMany('App\Models\Systems');
    }
    public function attributes()
    {
        return $this->hasMany('App\Models\Attributes');
    }
}
