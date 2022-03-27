<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function minaloc_info()
    {
        return $this->hasOne(Minaloc::class);
    }
    public function recovery_info()
    {
        return $this->hasOne(Recovery::class);
    }
    public function drive_temporary_permit()
    {
        return $this->hasOne(DriveTemporary::class);
    }
}
