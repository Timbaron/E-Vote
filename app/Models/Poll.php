<?php

namespace App\Models;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $incrementing = false;
    protected  $primaryKey = 'poll_id';

    public function results()
    {
        return $this->hasMany(Result::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function scopeGetResults($Query)
    // {
    //     return $Query->where('poll_id',$poll_id);
    // }
}
