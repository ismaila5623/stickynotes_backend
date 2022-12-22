<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteImages extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'notes_id'];

    public function note(){
        return $this->belongsTo(Notes::class);
    }
}
