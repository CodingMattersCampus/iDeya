<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;

class ParticipantAttendance extends Model
{
    protected $guarded = [];

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
