<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = 'songs';
    public $timestamps = false;
    protected $fillable = ['song'];
    
    public function album()
    {
        return $this->belongsTo(Album::class, 'author_id', 'id');
    }

}
