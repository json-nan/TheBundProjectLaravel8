<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "brand_name",
        "profile_picture",
        "brand_picture",
        "description",
        "enabled"
    ];
}
