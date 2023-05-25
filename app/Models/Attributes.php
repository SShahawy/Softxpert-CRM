<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entities;

class Attributes extends Model
{
    use HasFactory;

    public function entity_data()
    {
        return $this->hasMany('App\Models\EntityData');
    }

    public function entities()
    {
        return $this->belongsTo('App\Models\Entities');
    }
    public function system()
    {
        return $this->belongsTo('App\Models\Entities')->belongsTo('App\Models\Systems');
    }
    public function datatype()
    {
        return $this->belongsTo('App\Models\dataTypes');
    }

    protected $fillable = [
        'name',
        'entities_id',
        'datatype_id',
    ];


    protected $hidden = [];
}
