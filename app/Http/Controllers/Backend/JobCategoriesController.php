<?php

namespace App\Http\Controllers\Backend;
use App\Models\PermissionGroup;
use App\Http\Controllers\Controller;
use App\Models\jobCategories;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class JobCategoriesController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        // Fetch all job categories
        $jobCategories = jobCategories::all();
         // Return view with the job categories data
        return view('backend.pages.jobCategories.index', compact('jobCategories'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        $roles  = Role::all();
        $permissions = Permission::all();
        return view('backend.pages.jobCategories.create', compact('roles', 'permissions'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|max:255',
            'dis' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'active_date' => 'required|date',
            'status' => 'required',
        ]);

        // Get the current authenticated user
        $user = auth()->user(); // Assumes you're using default authentication

        // Prepare data for the job category
        $data = $request->all();
        $data['created_by'] = $user ? $user->id : 1;  // Default to 1 (admin) if no user is authenticated
        $data['updated_by'] = $user ? $user->id : 1;

        // Create a new job category
        JobCategories::create($data);

        // Redirect back with success message
        session()->flash('success', 'Job Category created successfully!');
        return redirect()->route('admin.jobCategories.index');
    }


    // Show the form for editing the specified resource
    public function edit($id)
    {      $permissions = Permission::all();
        $role = Role::all();
        $jobCategory = JobCategories::find($id);
        return view('backend.pages.jobCategories.edit', compact('jobCategory','permissions','role'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|max:255',
            'dis' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'active_date' => 'required|date',
            'status' => 'required',
        ]);

        // Get the current authenticated user
        $user = auth()->user(); // Assumes you're using default authentication

        // Find the job category and update it
        $jobCategory = JobCategories::find($id);
        $data = $request->all();
        $data['updated_by'] = $user ? $user->id : 1;  // Default to 1 (admin) if no user is authenticated
        $jobCategory->update($data);

        // Redirect back with success message
        session()->flash('success', 'Job Category updated successfully!');
        return redirect()->route('admin.jobCategories.index');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        // Find and delete the job category
        $jobCategory = jobCategories::find($id);
        $jobCategory->delete();

        // Redirect back with success message
        session()->flash('success', 'Job Category deleted successfully!');
        return redirect()->route('admin.jobCategories.index');
    }
}
