<?php

namespace App\Http\Controllers;

use App\Models\Resumes;  // Use the correct model name (Resumes)
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    public function index()
    {
        // Fetch all resumes
        $resumes = Resumes::all();  // Use Resumes model
        return view('resumes.index', compact('resumes'));
    }

    public function create()
    {
        return view('resumes.create');
    }

    // Store the newly created resume
    public function store(Request $request)
    {
        // Validate the form data, including the new fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'status' => 'required|string|in:Active,Inactive',
            'role' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'experience' => 'nullable|string',
            'skills' => 'nullable|string',
            'education' => 'nullable|string',
        ]);

        // Create the new resume and save it to the database
        Resumes::create($validatedData);

        // Redirect to the list of resumes with a success message
        return redirect()->route('resumes.index')->with('success', 'Resume added successfully!');
    }


    public function edit($id)
    {
        // Find the resume by ID
        $resume = Resumes::findOrFail($id);  // Use Resumes model
        return view('resumes.edit', compact('resume'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:resumes,email,' . $id,
            'title' => 'required|string|max:255',
            'status' => 'required|string',
            'role' => 'required|string',
        ]);

        // Find and update the resume
        $resume = Resumes::findOrFail($id);  // Use Resumes model
        $resume->update($request->all());

        return redirect()->route('resumes.index')->with('success', 'Resume updated successfully');
    }

    public function destroy($id)
    {
        // Find the resume and delete it
        $resume = Resumes::findOrFail($id);  // Use Resumes model
        $resume->delete();

        return redirect()->route('resumes.index')->with('success', 'Resume deleted successfully');
    }


    public function show($id)
    {
        // Find the resume by ID or return a 404 page if not found
        $resume = Resumes::findOrFail($id);

        // Return the view with the resume data
        return view('resumes.show', compact('resume'));
    }

    
}
