<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();

        if(!$penerbit){
            return response()->json([
                'data' => 'not found'
            ]);
        }
        return response()->json([
            'data' => $penerbit
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
        $penerbit = Penerbit::create($request->all());
        
        if(!$penerbit){
            return response()->json([
                'data' => 'failed to store'
            ]);
        }
        return response()->json([
            'data' => $penerbit
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
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->update($request->all());

        if(!$penerbit){
            return response()->json([
                'data' => 'failed to updated'
            ]);
        }
        return response()->json([
            'data' => $penerbit
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
        $penerbit = Identitas::findOrFail($id);
        $deleted = $penerbit->delete();

        if($deleted){
            return response()->json([
                'msg' => 'success delete data'
            ]);
        }
    }
}
