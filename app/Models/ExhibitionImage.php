<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExhibitionImage extends Model
{
    protected $fillable = ['exhibition_id', 'image_path'];
}