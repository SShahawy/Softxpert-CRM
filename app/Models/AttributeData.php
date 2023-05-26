<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeData extends Model
{
    use HasFactory;

    public function attribute()
    {
        return $this->belongsTo('App\Models\Attributes'); // Attributes data belongs to Attribute
    }
    protected $fillable = [
        'data',
        'attribute_id',
    ];
}
