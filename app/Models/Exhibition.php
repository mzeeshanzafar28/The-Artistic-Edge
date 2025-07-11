<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{   
    use HasFactory;
    protected $fillable = ['Name', 'Bio', 'Date', 'Venue'];

    public function images()
    {
        return $this->hasMany(ExhibitionImage::class);
    }
}