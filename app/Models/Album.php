<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['img', 'name','author','price', 'popular', 'soundtrack'];
    
    public function songs()
    {
        return $this->hasMany(Songs::class, 'author_id', 'id');
    }
}

