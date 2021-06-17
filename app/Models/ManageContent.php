<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keyword',
        "home_text_1",
        "home_text_2",
        "home_text_3",
        'image_path_1',
        'image_path_2',
        "facebook_link",
        "global_link",
        "phone_footer",
        "company_footer",
        "address_footer",
        "road_footer",
        "district_footer",
        "city_footer",
        "province_footer",
        "zipcode_footer",
    ];
}
