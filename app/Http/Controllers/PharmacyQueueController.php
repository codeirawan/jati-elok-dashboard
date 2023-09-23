<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyQueueController extends Controller
{
    public function index()
    {
        return view('pharmacy-queue');
    }
}
