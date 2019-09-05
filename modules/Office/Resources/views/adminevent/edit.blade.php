@extends('layouts.admin')

@section('content')
<div class="mt-20">
  <form class="w-full max-w-lg bg-white p-4 container mx-auto mt-8" method="POST" action="{{route('adminevent.update', compact('event'))}}">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    @csrf
    @method('PATCH')
        <div class="p-2 bg-red-600 mb-4 rounded">
            <h1 class="text-center text-3xl text-white">Update Event</h1>
        </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
           Event Start Time
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="start_time" type="time" name="start_time" value="{{$event->start_time}}">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
           Event End Time
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="end_time" type="time" name="end_time" value="{{$event->end_time}}">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
           Event Date
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="date" type="date" name="date" value="{{$event->date}}">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="expected_no">
            Expected Number
            </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="expected_no" type="number" name="expected_no" value="{{$event->expected_no}}">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reg_fee">
            Registration Fee
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="reg_fee" type="text" name="reg_fee" value="{{$event->reg_fee}}">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="no_of_days">
            Number of Days
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="no_of_days" name="no_of_days">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="10">9</option>
              <option value="10">10</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap mb-6">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="eventbudget">
            Event Budget
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="eventbudget" type="number" value="{{$event->eventbudget}}" name="eventbudget">
        </div>
        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="username">
            Guest Speaker
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="guestspeaker" type="text" name="guestspeaker" value="{{$event->guestspeaker}}">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="type_id">
            Event Status
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="status" name="status">
              <option value="pending">Pending</option>
              <option value="on-going">On-going</option>
              <option value="done">Done</option>
              <option value="cancelled">Cancelled</option>
              <option value="upcoming">Upcoming</option>
              <option value="approved">Approved</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
        <div class="container mx-auto px-32 mt-4">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded w-full" type="submit" id="add_event">
                 Update Event
            </button>
        </div>
      </div>
</form>
</div>

 @endsection
