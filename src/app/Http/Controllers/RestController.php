<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;

class RestController extends Controller
{
    public function startRest()
    {
        return view('index');
    }

    public function endRest()
    {
        return view('index');
    }
}
