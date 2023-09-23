<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakeQueueController extends Controller
{
    public function index()
    {
        return view('take-queue');
    }
}
