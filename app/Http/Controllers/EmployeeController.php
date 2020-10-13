<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            [
                "name" => "Ahmad",
                "email" => "ahmad@a.com",
                "phone" => "123456",
                "salary" => "2000",
                "department" => "Accounting"
            ],
            [
                "name" => "Ali",
                "email" => "ali@a.com",
                "phone" => "123789",
                "salary" => "2100",
                "department" => "Marketing"
            ],
            [
                "name" => "Saly",
                "email" => "saly@a.com",
                "phone" => "123789",
                "salary" => "3000",
                "department" => "Quality"
            ],
        ];
        Employee::insert($employees);
        return "Recordes are inserted";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }

    public function importForm()
    {
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file);
        return "Recordes are imported successfully!";
    }
}
