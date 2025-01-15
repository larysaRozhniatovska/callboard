<?php

namespace App\Models;

use App\Models\Advert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'photo',
        'advert_id',
    ];
    public function advert(){
        return $this->belongsTo(Advert::class);
    }
}
