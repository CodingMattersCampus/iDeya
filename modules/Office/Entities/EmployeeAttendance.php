<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    protected $guarded = [];
     public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
