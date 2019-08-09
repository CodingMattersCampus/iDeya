<?php

namespace Modules\Office\Http\Controllers\Attendance;

use Modules\Office\Entities\GuestAttendance;
use Modules\Office\Entities\EmployeeAttendance;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttendanceListingController extends Controller
{
    
    public function __invoke(Request $request)
    {
       
        $guestAttendance = GuestAttendance::all();
        $employeeAttendance = EmployeeAttendance::all();
     

        return view('office::attendance.listing', compact('guestAttendance'));
    }
}
