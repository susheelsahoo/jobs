<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careers::all();
        return view('backend.pages.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles  = Role::all();
        return view('backend.pages.careers.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:careers',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New Careers
        $Careers = new Careers();
        $Careers->name = $request->name;
        $Careers->email = $request->email;
        $Careers->password = Hash::make($request->password);
        $Careers->save();

        if ($request->roles) {
            $Careers->assignRole($request->roles);
        }

        session()->flash('success', 'Careers has been created !!');
        return redirect()->route('admin.careers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Careers = Careers::find($id);
        $roles  = Role::all();
        return view('backend.pages.careers.edit', compact('Careers', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Create New Careers
        $Careers = Careers::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:careers,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
        ]);


        $Careers->name = $request->name;
        $Careers->email = $request->email;
        if ($request->password) {
            $Careers->password = Hash::make($request->password);
        }
        $Careers->save();

        $Careers->roles()->detach();
        if ($request->roles) {
            $Careers->assignRole($request->roles);
        }

        session()->flash('success', 'Careers has been updated !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Careers = Careers::find($id);
        if (!is_null($Careers)) {
            $Careers->delete();
        }

        session()->flash('success', 'Careers has been deleted !!');
        return back();
    }
}
