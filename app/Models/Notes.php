<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'note', 'categories_id'];

    public function Category(){
        return $this->belongsTo(Categories::class);
    }

    public function noteImages(){
        return $this->hasMany(NoteImages::class);
    }
}
