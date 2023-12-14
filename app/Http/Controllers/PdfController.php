<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Middleware\User;
use App\Models\Materi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function showForm()
    {
        $materi = Materi::all();
        return view('users.isimateri',compact('materi'));
    }

    public function uploadPdf(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $pdfPath = $request->file('pdf')->storeAs('pdf_files', 'document.pdf', 'public');

        return redirect()->route('pdf.show', ['path' => $pdfPath]);
    }

    public function showPdf($path)
    {
        $pdf = PDF::loadView('pdf.show', ['path' => $path]);
        return $pdf->stream('document.pdf');
    }
}
