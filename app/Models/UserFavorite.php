<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'favorite_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function favorite()
    {
        return $this->belongsTo(User::class,'favorite_id');
    }
}
