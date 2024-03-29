<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table ='unit';

    protected $fillable = [
        'unit',
        'image',
        'amount',
        
    ];

    public function content()
    {
        return $this->hasMany(Content::class);
    }
}
