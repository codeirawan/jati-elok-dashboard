<?php

namespace App\Http\Controllers;

use PDF;

class MinutesOfMeetingController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('minutes-of-meeting');
        $pdf->setOption('enable-local-file-access', true);
        return $pdf->stream();
    }
}
