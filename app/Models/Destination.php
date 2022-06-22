<?php

namespace App\Models;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable=[
      'destination',
      'location',
      'description',
      'cover',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
