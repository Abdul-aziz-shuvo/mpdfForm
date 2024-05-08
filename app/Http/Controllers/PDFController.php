<?php

namespace App\Http\Controllers;

use App\Services\CustomMpdf\CustomMpdf;
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function viewPdf()
    {
        

        $pdf = PDF::loadView('form');
        
        return $pdf->stream('document.pdf');
    }

}
