@extends('layouts.admin')

@section('content')

<div class="text-gray-900 bg-gray-200 container mx-auto mt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Speaker Details
        </h1>
    </div>
    <div class="px-3 py-4 justify-center">
    <div class="mb-2 flex justify-between">
        <span class="text-right .text-4xl">{{$speaker->fullName()}}</span>
    </div>

    <div class="mb-2 flex justify-between">
        <span class="text-sm font-semibold">Profession:</span>
        <span class="text-right text-sm">{{$speaker->profession}}</span>
    </div>
    <div class="mb-2 flex justify-between">
        <span class="text-sm font-semibold">Organization:</span>
        <span class="text-right text-sm">{{$speaker->organization}}</span>
    </div>
    <div class="mb-2 flex justify-between">
        <span class="text-sm font-semibold">About:</span>
        <span class="text-right text-sm">{{$speaker->description}}</span>
    </div>
    <!-- 
        <table class="w-full text-md bg-white shadow-md rounded mb-4" id="myTable">
            <tbody>
                <tr class="border-b text-center">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Profession</th>
                    <th class="text-left p-3 px-5">Organization</th>
                    <th class="text-left p-3 px-5">Description</th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$speaker->fullName()}}</td>
                    <td class="p-3 px-5">{{$speaker->profession}}</td>
                    <td class="p-3 px-5">{{$speaker->organization}}</td>
                    <td class="p-3 px-5">{{$speaker->description}}</td>
                </tr>
            </tbody>
        </table>
    -->
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
