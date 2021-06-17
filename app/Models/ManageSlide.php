<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'line_title',
        'description',
        'link'
    ];   
}
