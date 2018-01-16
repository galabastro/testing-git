<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TestController extends Controller
{
    public function HelloWorld() 
    {
        // return "Hello World!";
        return redirect('/testing-redirect');
    }

    public function Redirect()
    {
        // return "You've successfully redirected";
        $students = Student::where('id', '<', 10)->get();

        return view('testing', compact('students'));
    }
}
