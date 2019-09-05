<?php

namespace Modules\Office\Http\Controllers\Event;

use Illuminate\Routing\Controller;

class AdminSpeakerDetailController extends Controller
{
	public function __invoke(Event $event)
    {
    	return view('office::adminevent.speaker.detail', compact('event'));
    }
}
