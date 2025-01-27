<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssemblyConstituency extends Model
{
    use SoftDeletes;

    public function state() {
        return $this->belongsTo(State::class);
    }
}
