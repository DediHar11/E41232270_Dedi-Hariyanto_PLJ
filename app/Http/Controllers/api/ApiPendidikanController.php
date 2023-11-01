<?php

namespace App\Http\Controllers\api;

use App\Models\pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $data = pendidikan::all();
        return Response::json($data, 201);
    }
    public function getPen($id)
    {
        $data = pendidikan::find($id);

        return Response::json($data, 200);
    }

    public function create(Request $request)
    {
        pendidikan::create($request->all());

        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan'
        ], 201);
    }

    public function update($id, Request $request)
    {
        pendidikan::find($id)->update($request->all());

        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dirubah'
        ], 201);
    }

    public function delete($id)
    {
        pendidikan::destroy($id);
        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dihapus'
        ], 201);
    }
}
