<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorQueueController extends Controller
{
    public function index()
    {
        return view('doctor-queue');
    }
}
