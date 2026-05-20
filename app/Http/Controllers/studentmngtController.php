<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmngt;

class studentmngtController extends Controller
{
    public function index () {
        $students = studentmngt::all();
        return view ('student.index', ['students' => $students]);
    }

    public function create () {
        return view ('student.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'add' => ['required', 'string', 'max:255'],
            'dobirth' => ['required', 'string', 'max:20'],
        ]);

        studentmngt::create($validated);

        return redirect()
            ->route('student.index')
            ->with('status', 'Student created successfully!');
    }
}
