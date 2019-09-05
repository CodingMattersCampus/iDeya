<?php

namespace Modules\Office\Http\Controllers\Event;

use App\Event;
use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\Events\AddSpeakerRequest;

class AdminSpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $speaker = Speaker::all();
        return view('office::adminevent.speaker.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('office::adminevent.speaker.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(AddSpeakerRequest $request)
    {
        $data = $request->except('_token');

        Speaker::create($data);
        return redirect()->route('adminevent.speaker.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('office::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Speaker $speaker, Event $event)
    {
        return view('office::adminevent.speaker.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Speaker $speaker, Event $event)
    {
        $data = $request->except('_token');
        $event->update($data);
        return redirect()->route('adminevent.speaker.detail', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request, Speaker $speaker, Event $event)
    {
        $data = $request->except('_token');
        $event->delete();
        return redirect()->route('adminevent.speaker.index');
    }
}
