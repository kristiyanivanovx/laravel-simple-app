<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'plane_type_id'
    ];

    public function type()
    {
        return $this->belongsTo(PlaneType::class, 'plane_type_id');
    }
}
