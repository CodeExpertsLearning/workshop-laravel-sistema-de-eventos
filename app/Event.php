<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'body',
        'start_date','end_date', 'is_active', 'owner_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
