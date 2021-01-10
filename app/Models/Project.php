<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    //Por determinar
    public function images(){
        return $this->hasMany('images');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
