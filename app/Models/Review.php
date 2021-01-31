<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Review extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'note_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];

    public function note(){
        return $this->belongsTo(Note::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
