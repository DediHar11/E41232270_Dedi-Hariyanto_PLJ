<?php

namespace App\Http\Controllers;

use App\Models\pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pendidikan::all();
        return view('pendidikan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, pendidikan $data)
    {
        pendidikan::create($request->all());
        return redirect()->route('pendidikan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = pendidikan::find($id);
        return view('pendidikan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = pendidikan::find($id);
        $data->update($request->all());
        return redirect()->route('pendidikan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = pendidikan::find($id);
        $data->delete();

        return redirect()->route('pendidikan.index');
    }
}
