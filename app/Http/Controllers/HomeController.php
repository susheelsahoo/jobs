<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = '';
        return view('frontend.pages.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = '';
        return view('frontend.pages.jobs.index', compact('jobs'));
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
            'name' => 'required|max:50|unique:fi_types,name',
        ]);
        // Create New fitype
        $fitype = new FiType();
        $fitype->name         = $request->name;
        $fitype->created_by   = Auth::guard('admin')->user()->id;
        $fitype->updated_by   = Auth::guard('admin')->user()->id;
        // $fitype->name         = $request->name;
        $fitype->save();

        session()->flash('success', 'FI Type has been created !!');
        return redirect()->route('admin.fitypes.index');
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
        $fitype = FiType::find($id);

        return view('backend.pages.fitype.edit', compact('fitype'));
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
        // Create New FiType
        $fitype = FiType::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50|unique:fi_types,name,' . $id,

        ]);


        $fitype->name = $request->name;
        $fitype->save();

        session()->flash('success', 'FI Type has been updated !!');
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
        $fitype = FiType::find($id);
        if (!is_null($fitype)) {
            $fitype->delete();
        }

        session()->flash('success', 'Fi Type has been deleted !!');
        return back();
    }
    public function redirectAdmin()
    {
        return redirect()->route('admin.dashboard');
    }
}
