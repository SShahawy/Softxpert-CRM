<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Systems extends Model
{
    public function entities()
    {
        return $this->belongsTo('App\Models\Entities');
    }

    protected $fillable = [
        'name',
    ];


    protected $hidden = [];
}
