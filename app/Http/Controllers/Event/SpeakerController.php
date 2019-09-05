<?php

namespace App\Http\Controllers\Event;

use App\Event;
use App\Speaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaker = Speaker::all();
        return view('event.speaker', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.speaker', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Speaker::create($data);
        return redirect()->route('events.speaker');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('event.speaker', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker, Events $event)
    {
        $data = $request->except('_token');
        $event->update($data);
        return redirect()->route('speaker.detail', compact('events'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Speaker $speaker)
    {
        $data = $request->except('_token');
        $speaker->delete();
        return redirect()->route('event.speaker');
    }
}
