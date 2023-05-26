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
        return $this->hasMany('App\Models\EntityData'); // Attributes has many entity data
    }

    public function entities()
    {
        return $this->belongsTo('App\Models\Entities'); // Attributes belongs to entities
    }
    public function system()
    {
        return $this->belongsTo('App\Models\Entities')->belongsTo('App\Models\Systems'); // Attributes belongs to entities that belongs to Systems
    }
    public function datatype()
    {
        return $this->belongsTo('App\Models\dataTypes'); // Attributes belongs to dataTypes
    }

    protected $fillable = [
        'name',
        'entities_id',
        'datatype_id',
    ];


    protected $hidden = [];
}
