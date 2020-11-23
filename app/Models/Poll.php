<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poll extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
