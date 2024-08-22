<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
   // Show the form
   public function showForm()
   {
       return view('form');
   }

   // Handle form submission and generate PDF
   public function generatePdf(Request $request)
   {
       // Validate the form data
       $validated = $request->validate([
           'first_name' => 'required|string|max:255',
           'last_name' => 'required|string|max:255',
           'email' => 'required|email|max:255',
           'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
       ]);

       // Process the form data
       $firstName = $validated['first_name'];
       $lastName = $validated['last_name'];
       $email = $validated['email'];

       // Handle file upload
       $file = $request->file('file');
       $filePath = $file->store('uploads', 'public');

       // Generate PDF with the submitted data
       $pdf = PDF::loadView('pdf.invoice', [
           'first_name' => $firstName,
           'last_name' => $lastName,
           'email' => $email,
           'file_path' => $filePath,
       ]);

       return $pdf->download('invoice.pdf');
   }
}
