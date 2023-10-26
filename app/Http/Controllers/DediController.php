<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DediController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "TAMPILAN VIEW...DEDI";
        $nama = "Dedi Hariyanto";
        $pelajaran = ["Sistem Informasi Web","JAVA","Mobile"];
        return view('home',compact('nama','pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "BUAT.....DEDI";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "STORE...DEDI";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "SHOW....DEDI";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "EDIT....DEDI";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "PERBARUI....DEDI";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "HAPUSSSSSSSS....DEDI";
    }
}
