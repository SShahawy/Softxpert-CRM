<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\EloquentUserProvider;
use App\Models\Systems;

class Entities extends Model
{
    use HasFactory;

    public function entity_data()
    {
        return $this->hasMany('App\Models\EntityData'); // Entities has many entity data
    }

    public function system()
    {
        return $this->belongsTo('App\Models\Systems'); // Entities belongs to Systems
    }
    public function attributes()
    {
        return $this->hasMany('App\Models\Attributes'); // Entities has many attributes
    }

    protected $fillable = [
        'name',
        'system_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];
}
