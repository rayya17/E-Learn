<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Middleware\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Kocakk Gimang',
            'content' => 'Hanya manusia Bodoh YAng mampu mencintai Tanpa Perasaan'
        ];

        $pdf = Pdf::loadview('dompdf.tugas', $data);
        return $pdf->download('tugas.pdf');
    }
}
