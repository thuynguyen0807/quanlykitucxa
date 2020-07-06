<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\PDF;

class pdfController extends Controller
{
    public function index() {
    	$data = ['title'=> 'Test export pdf file'];
    	$pdf = PDF::loadView('admin.layouts.hoadondiennuoc', $data);
    	return $pdf->download('thuy');
    }
}
