<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = [];

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
