<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();

        if(!$peminjaman){
            return response()->json([
                'data' => 'not found'
            ]);
        }
        return response()->json([
            'data' => $peminjaman
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create($request->all());
        
        if(!$peminjaman){
            return response()->json([
                'data' => 'failed to store'
            ]);
        }
        return response()->json([
            'data' => $peminjaman
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        if(!$peminjaman){
            return response()->json([
                'data' => 'failed to updated'
            ]);
        }
        return response()->json([
            'data' => $peminjaman
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Identitas::findOrFail($id);
        $deleted = $peminjaman->delete();

        if($deleted){
            return response()->json([
                'msg' => 'success delete data'
            ]);
        }
    }
}
