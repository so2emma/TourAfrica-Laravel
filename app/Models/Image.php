<?php

namespace App\Models;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'destination_id',
    ];

    public function destinations(){
        return $this->belongsTo(Destination::class);
    }
}
