<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'deadline' => 'required|date',
        ]);

        Assignment::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Assignment created successfully.');
    }

    public function submit(Request $request, Assignment $assignment)
    {
        $request->validate(['file' => 'required|file']);

        $path = $request->file('file')->store('assignments');

        auth()->user()->assignments()->attach($assignment, ['file_path' => $path]);

        return redirect()->back()->with('success', 'Assignment submitted.');
    }
}
