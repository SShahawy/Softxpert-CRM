<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityData extends Model
{
    use HasFactory;

    public function entity()
    {
        return $this->belongsTo('App\Models\Entities');
    }
    public function attribute()
    {
        return $this->belongsTo('App\Models\Attributes');
    }

    // KAML b 7war eno hayban fl page deh kol el attributes el el mafrod td5alha zy maslan ytla3lak 
    // input text ll name w input date ll birthday w keda y3ny , kol dah f page entity data creation w mn ba3do kolo sahl

    protected $fillable = [
        'data',
        'entity_id',
    ];
}
