<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArtistImage;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Name',
        'Bio',
        'Contact',
        'Email',
        'Country',
        'Address',
        'profile_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ArtistImage::class);
    }
}
