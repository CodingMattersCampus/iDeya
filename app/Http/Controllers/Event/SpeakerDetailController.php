<?php

namespace App\Http\Controllers\Event;

use App\Event;
use App\Speaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeakerDetailController extends Controller
{
    public function __invoke(Event $event, Speaker $speaker)

    {
    	return view('event.speakerdetail', compact('event', 'speaker'));
    }
}
