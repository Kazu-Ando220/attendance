<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function startAttendance()
    {
        return view('index');
    }

    public function endAttendance()
    {
        return view('index');
    }

    public function getAttendance()
    {
        $attendances = Attendance::Paginate(5);
        return view('attendance', ['attendances' => $attendances]);
    }
}
