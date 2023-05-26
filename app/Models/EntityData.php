<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityData extends Model
{
    use HasFactory;

    public function entity()
    {
        return $this->belongsTo('App\Models\Entities'); // EntityData belongs to Entities
    }
    public function attribute()
    {
        return $this->belongsTo('App\Models\Attributes'); // EntityData belongs to Attributes
    }


    protected $fillable = [
        'data',
        'entity_id',
    ];
}
