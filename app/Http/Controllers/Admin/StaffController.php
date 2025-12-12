<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller
{
    
    public function index()
    {
        $staff = Staff::all();
        return view('admin.staff.index', compact('staff'));
    }

    
    public function create()
    {
        $branches = \App\Models\Branch::all();
        return view('admin.staff.create', compact('branches'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'branch_id' => 'nullable|exists:branches,id',
        ]);

        Staff::create($request->all());

        return redirect()->route('admin.staff.index')->with('success', 'Staff member created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $staff = Staff::findOrFail($id);
        $branches = \App\Models\Branch::all();
        return view('admin.staff.edit', compact('staff', 'branches'));
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'branch_id' => 'nullable|exists:branches,id',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->update($request->all());

        return redirect()->route('admin.staff.index')->with('success', 'Staff member updated successfully.');
    }

   
    public function destroy(string $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('admin.staff.index')->with('success', 'Staff member deleted successfully.');
    }
}
