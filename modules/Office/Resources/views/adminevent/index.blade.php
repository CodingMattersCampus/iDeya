@extends('layouts.admin')

@section('content')

<div class="text-gray-900 bg-gray-200 container mx-auto mt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Event Listings
        </h1>
        <a href="{{route('adminevent.create')}}" role="button" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full ml-2" id="create-event">
            Create Event
        </a>
    </div>
    <div class="px-3 py-4 justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4" id="myTable">
            <tbody>
                <tr class="border-b text-center">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Event Title</th>
                    <th class="text-left p-3 px-5">Event Type</th>
                    <th class="text-left p-3 px-5">Date</th>
                    <th class="text-left p-3 px-5">Event Budget</th>
                    <th class="text-left p-3 px-5">No. of Participants</th>
                    <th class="text-left p-3 px-5">Guest Speaker</th>
                    <th class="text-left p-3 px-5">Reg. Fee</th>
                    <th class="text-left p-3 px-5">No. of Day/s</th>
                    <th class="text-left p-3 px-5">Status</th>
                </tr>
                <?php  $i=1;?>
                @foreach($events as $event)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5"><a href="{{route('adminevent.detail', compact('event'))}}" class="hover:underline">{{$event->title}}</a></td>
                    <td class="p-3 px-5">{{$event->eventType->name}}</td>
                    <td class="p-3 px-5">{{$event->date}}</td>
                    <td class="p-3 px-5"> {{optional(optional($event->eventBudget)->budget)->total_amount}}</td>
                    <td class="p-3 px-5">{{$event->eventParticipants->count()}} / {{$event->expected_no}}</td>
                    <td class="p-3 px-5">{{$event->guestspeaker}}</td>
                    <td class="p-3 px-5">{{$event->reg_fee}}</td>
                    <td class="p-3 px-5">{{$event->no_of_days}}</td>
                    <td class="p-3 px-5"><div class="bg-yellow-500  text-white text-sm px-2 py-1  rounded-full ml-2 text-center ">{{$event->status}}</div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
            
            var table = $('#myTable').DataTable( {
                    responsive: true
                } )
                .columns.adjust()
                .responsive.recalc();
        } );

    </script>
@endsection
