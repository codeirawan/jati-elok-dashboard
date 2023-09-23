<?php

namespace App\Http\Controllers;

use PDF;

class GeneralConsentController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('general-consent');
        $pdf->setOption('enable-local-file-access', true);
        return $pdf->stream();
    }
}
