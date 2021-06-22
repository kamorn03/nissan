<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurvayData extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'product',
        'location',
        'brand',
        'period',
        'name',
        'time',
        'phone',
    ];   

}
