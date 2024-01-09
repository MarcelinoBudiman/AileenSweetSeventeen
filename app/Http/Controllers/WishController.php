<?php

namespace App\Http\Controllers;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    // app/Http/Controllers/WishController.php
public function index()
{
    $wishes = Wish::latest()->take(5)->get();
    return view('wishes.index', compact('wishes'));
}

public function create()
{
    return view('wishes.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
    ]);
    Wish::create($validatedData);
    $to = $request->input('inviteto');
    $data = Wish::latest()->take(5)->get();
    session()->flash('success', 'Data berhasil disimpan!');
    return redirect()->back()->with(compact('to', 'data'));
}

public function show(Wish $wish)
{
    return view('wishes.show', compact('wish'));
}

public function edit(Wish $wish)
{
    return view('wishes.edit', compact('wish'));
}

public function update(Request $request, Wish $wish)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    $wish->update($validatedData);

    return redirect(route('wishes.index'));
}

public function destroy(Wish $wish)
{
    $wish->delete();
    
    return redirect(route('wishes.index'));
}

}
