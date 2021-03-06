<?php

namespace App;

use App\Event;
use App\Budget;
use Illuminate\Database\Eloquent\Model;

class EventBudget extends Model
{
    protected $guarded = [];

    public function budget()
    {
        return $this->belongsTo(Budget::class, 'id');
    }
}
