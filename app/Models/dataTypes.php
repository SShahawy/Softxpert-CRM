<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataTypes extends Model
{
    use HasFactory;
    public function attribute()
    {
        return $this->belongsTo('App\Models\Attributes');
    }
    protected $fillable = [
        'type',
        'int_type',
        'string_type',
        'float_type',
        'date_type',
    ];
}
