<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtworkComment extends Model
{
    protected $fillable = ['user_id', 'artwork_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function artwork()
    {
        return $this->belongsTo(ArtistImage::class, 'artwork_id');
    }
}
