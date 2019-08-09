@extends('layouts.admin')

@section('content')
    <div class="text-gray-900 bg-gray-200 container mx-auto mt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl"> Attendance Sheet </h1>
    </div>

    <section>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <h1>Guest</h1>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Time - In</th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">School/Organization</th>
                    <th class="text-left p-3 px-5">Purpose</th>

                </tr>
                @foreach($guestAttendance as $guest)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$guest->created_at}}</td>
                    <td class="p-3 px-5">{{$guest->fullName()}}</td>
                    <td class="p-3 px-5">{{$guest->contact_number}}</td>
                    <td class="p-3 px-5">{{$guest->email}}</td>
                    <td class="p-3 px-5"> {{$guest->schoolorganization}}</td>
                    <td class="p-3 px-5"> {{$guest->purpose}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>

    <section>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <h1>Employee</h1>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Time - In</th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Position</th>
                </tr>
                @foreach($employeeAttendance as $employee)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$employee->created_at}}</td>
                    <td class="p-3 px-5">{{$employee->fullName()}}</td>
                    <td class="p-3 px-5">{{$employee->contact_number}}</td>
                    <td class="p-3 px-5">{{$employee->email}}</td>
                    <td class="p-3 px-5"> {{$employee->position}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>

    <section>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <h1>Intern</h1>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Time - In</th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                </tr>
                foreach($employeeAttendance as $employee)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$intern->created_at}}</td>
                    <td class="p-3 px-5">{{$intern->fullName()}}</td>
                    <td class="p-3 px-5">{{$intern->contact_number}}</td>
                    <td class="p-3 px-5">{{$intern->email}}</td>
                </tr>
                endforeach
            </tbody>
        </table>
    </div>
    </section>

    <section>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <h1>Co-Working</h1>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Time - In</th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                </tr>
                foreach($employeeAttendance as $employee)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$coworking->created_at}}</td>
                    <td class="p-3 px-5">{{$coworking->fullName()}}</td>
                    <td class="p-3 px-5">{{$coworking->contact_number}}</td>
                    <td class="p-3 px-5">{{$coworking->email}}</td>
                </tr>
                endforeach
            </tbody>
        </table>
    </div>
    </section>

    <section>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <h1>Participants</h1>
        <h2>Name of Activity:</h2>
        <h2>Venue:</h2>
        <h2>Date:</h2>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Time - In</th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">School/Organization</th>
                    <th class="text-left p-3 px-5">First Timer</th>
                    <th class="text-left p-3 px-5">Team Name</th>
                </tr>
                @foreach($participantAttendance as $participant)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$participant->created_at}}</td>
                    <td class="p-3 px-5">{{$participant->fullName()}}</td>
                    <td class="p-3 px-5">{{$participant->contact_number}}</td>
                    <td class="p-3 px-5">{{$participant->email}}</td>
                    <td class="p-3 px-5"> {{$participant->schoolorg}}</td>
                    <td class="p-3 px-5">{{$participant->is_firsttime}}</td>
                    <td class="p-3 px-5"> {{$participant->team_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>

</div>
@endsection
