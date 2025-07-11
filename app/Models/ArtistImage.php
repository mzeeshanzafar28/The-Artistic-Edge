<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'image_path',
        'comment',
        'price',
        'year',
        'print',
        'print_size',
        'edition'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function reactions()
{
    return $this->hasMany(ArtworkReaction::class, 'artwork_id');
}

public function comments()
{
    return $this->hasMany(ArtworkComment::class, 'artwork_id');
}
}
