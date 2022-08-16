<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtopic',
        'unit_id'

    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
