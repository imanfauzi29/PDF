<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    public function showEmployees()
    {
        $employee = Employee::all();
        return view('index', compact('employee'));
    }

    public function createPDF()
    {
        // retreive all records from db
        $data = Employee::all();

        $pdf = PDF::loadView('welcome', compact('data'))->setPaper('a4', 'potrait');

        // $save = Storage::put('public/pdf/name.pdf', $pdf->output());

        // return $pdf->download('pdf_file.pdf');
        return $pdf->stream();
    }
}
