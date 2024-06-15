<?php

namespace App\Http\Controllers;

use App\Models\kelurahan;
use Illuminate\Http\Request;

class kelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = kelurahan::get();
        return view('kelurahan.pages.index',compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelurahan.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cek validasi
        $request->validate([ 
            'nama' => 'required|string',
            'kecamatan_id' => 'required|numeric',
            
        ]);
        //kirim data ke database
        kelurahan::create([
            'nama'=> $request->nama,
            'kecamatan_id'=> $request->kecamatan_id,
            
        ]);
        //redirect ke index
        return redirect()->route('kelurahan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kelurahan $kelurahan)
    {
        return view('kelurahan.pages.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelurahan $kelurahan)
    {
        // Pass the kelurahan instance to the view
        return view('kelurahan.pages.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelurahan $kelurahan)
    {
          // Update the kelurahan instance
          $kelurahan->update($request->all());

          // Redirect to the index page with a success message
          return redirect()->route('kelurahans.index')->with('success', 'kelurahan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelurahan $kelurahan)
    {
        $kelurahan->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('kelurahans.index')->with('success', 'kelurahan deleted successfully');
    }
}
