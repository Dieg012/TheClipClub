<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'messages'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
