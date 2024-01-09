<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count_tamu = Tamu::count();
        $tamus = Tamu::latest()->paginate(5);
        return view('tamus.index',compact('tamus','count_tamu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
  
        Tamu::create($request->all());
   
        return redirect()->route('tamus.index')->with('success','tamu created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tamu $tamu)
    {
        return view('tamus.show',compact('tamu'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tamu $tamu)
    {
        return view('tamus.edit',compact('tamu'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tamu $tamu)
    {
        $request->validate([
            'name' => 'required'
            ]);
  
        $tamu->update($request->all());
  
        return redirect()->route('tamus.index')->with('success','tamu updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tamu $tamu)
    {
        $tamu->delete();
  
        return redirect()->route('tamus.index')->with('success','tamu deleted successfully');

    }
}
