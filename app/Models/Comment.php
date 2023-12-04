<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chirp;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'chirp_id',
        'user_id',
        'content',
    ];

    // protected $dispatchesEvents = [
    //     'created' => ChirpCreated::class,
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chirp()
    {
        return $this->belongsTo(Chirp::class);
    }
}
