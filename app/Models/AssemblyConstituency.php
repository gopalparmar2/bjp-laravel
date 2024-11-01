<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssemblyConstituency extends Model
{
    public function state() {
        return $this->belongsTo(State::class);
    }
}
