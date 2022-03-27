<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriveTemporary extends Model
{
    protected $table = 'drive_temporary_permit';
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}
