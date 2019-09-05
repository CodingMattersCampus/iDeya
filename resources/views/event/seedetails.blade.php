@extends('layouts.app')

@section('content')

<!-- <div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="display-4">{{$event->title}}</h5>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h5>Type: {{$event->eventType->name}}<br>
                            Date: {{$event->date}}<br>
                            Registration Fee: {{$event->reg_fee}}<br>
                            Number of Days: {{$event->no_of_days}}<br>
                            Guest Speaker: {{$event->guestspeaker}}<br><br>
                            Description: {{$event->description}}<br>
                        </h5>
                    </div>
                    <br><br><h5>Interested?</h5>
                    <a href="{{route('register', compact('event'))}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container mx-auto mt-20">
    <div class="flex flex-wrap p-4">
        <div class="w-full md:w-1/3 py-4 bg-white border-t-8 border-red-700 rounded container mx-auto">
            <div class="p-2 px-8">
                    <div class="text-center mb-4">
                        <span class="text-base font-semibold uppercase text-red-700">{{$event->title}}</span>
                    </div>
                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">Type:</span>
                        <span class="">{{$event->EventType->name}}</span>
                    </div>

                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">Date:</span>
                        <span class="">{{$event->date}}</span>
                    </div>

                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">Reg Fee:</span>
                        <span class=""><span>&#8369;</span> {{$event->reg_fee}}</span>
                    </div>

                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">No. of Day/s:</span>
                        <span class="">{{$event->no_of_days}}</span>
                    </div>

                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">Guest Speaker:</span>
                        <span class="text-blue-500"><a href="{{route('event.speakerdetail', compact('event'))}}">{{$event->guestspeaker}}</a></span>
                    </div>

                    <div class="mb-2 flex justify-between">
                        <span class="font-semibold">Description:</span>
                        <span class="pl-2">{{$event->description}}</span>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <span class="font-semibold">Interested?</span>
                </div>
                <div class="container mx-auto px-32 pb-4">
                        <a class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-8 border border-red-700 rounded w-full" href="{{route('register', compact('event'))}}">
                        Register Now
                        </a>
                </div>

        </div>
    </div>
</div>
@endsection