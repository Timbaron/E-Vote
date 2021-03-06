<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'poll_id',
        'user_id',
        'candidate'
    ];
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
