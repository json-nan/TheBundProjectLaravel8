<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "brand_name",
        "profile_picture",
        "brand_picture",
        "logo_icon",
        "description",
        "enabled"
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->using(DesignerTag::class);
    }

    public function socialNetworks(): BelongsToMany
    {
        return $this->belongsToMany(SocialNetwork::class)->withPivot(['url'])->using(DesignerSocialNetwork::class);
    }
}
