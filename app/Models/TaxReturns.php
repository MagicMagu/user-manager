<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxReturns extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'periodo',
        'ano'
    ];

    protected $hidden = [
        'user_id'
    ];
}
