<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minaloc extends Model
{

    protected $table = 'minaloc_info';
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}
