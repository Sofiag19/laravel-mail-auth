<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patient extends Model
{
    protected $fillable = [
        'Name',
        'Lastname',
        'DayOfBirth',
        'Mail',
        'Disease'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
