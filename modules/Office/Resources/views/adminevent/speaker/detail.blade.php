@extends('layouts.admin')

@section('content')

<div class="text-gray-900 bg-gray-200 container mx-auto mt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Speaker Detail
        </h1>
    </div>
    <div class="px-3 py-4 justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4" id="myTable">
            <tbody>
                <tr class="border-b text-center">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Profession</th>
                    <th class="text-left p-3 px-5">Organization</th>
                    <th class="text-left p-3 px-5">Description</th>
                </tr>
                @foreach($speakers as $speaker)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$speaker->fullName()}}</td>
                    <td class="p-3 px-5">{{$speaker->profession}}</td>
                    <td class="p-3 px-5">{{$speaker->organization}}</td>
                    <td class="p-3 px-5"> {{$speaker->description}}</td>
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
