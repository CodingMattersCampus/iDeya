<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class CoWorkingAttendance extends Model
{
    protected $guarded = [];
     public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
