<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recovery extends Model
{
    protected $table = 'recovery_info';
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}
