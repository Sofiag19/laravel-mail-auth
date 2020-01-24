<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'Name',
        'Lastname',
        'DayOfBirth',
        'Mail',
        'Specialization'
    ];

    public function patients() {
        return $this->hasMany(Patient::class);
    }
}
