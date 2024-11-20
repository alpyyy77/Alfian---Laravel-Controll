<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $fillable = [
        "name",
        "image",
        "location",
        "history",
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
