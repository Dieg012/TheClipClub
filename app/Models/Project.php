<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category',
        'director',
        'actor',
        'thechnitian',
        'producer',
        'screenwriter',
        'img',
        'coordinates',
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'project_tag', 'project_id', 'tag');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
