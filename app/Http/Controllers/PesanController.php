<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMasuk(){
        $pesanMasuk = Pesan::where('pengirim_id', '!=', Auth::user()->id)
                            ->where('penerima_id', Auth::user()->id)->get();

        return view('user.pesan.masuk', compact('pesanMasuk'));
    }

    public function indexAdminMasuk(){
        $pesanMasuk = Pesan::where('pengirim_id', '!=', Auth::user()->id)
                            ->where('penerima_id', Auth::user()->id)->get();
        
        return view('admin.pesan.masuk', compact('pesanMasuk'));
    }

    public function indexTerkirim(){
        $pesanTerkirim = Pesan::where('penerima_id', '!=', Auth::user()->id)
                                ->where('pengirim_id', Auth::user()->id)->get();
        
        return view('user.pesan.terkirim', compact('pesanTerkirim'));
    }

    public function indexAdminTerkirim(){
        $pesanTerkirim = Pesan::where('penerima_id', '!=', Auth::user()->id)
                                ->where('pengirim_id', Auth::user()->id);
        
        return view('admin.pesan.terkirim', compact('pesanTerikirim'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kirimPesan(Request $request)
    {
        $pesanTerkirim = Pesan::where('penerima_id', '!=', Auth::user()->id)->where('pengirim_id', Auth::user()->id);
        $penerima = User::where('role', 'admin')->get();
        $pesanTerkirim = Pesan::create([
            'penerima_id' => $request,
            'pengirim_id' => $request,
            'judul' => $request,
            'isi' => $request,
            'status' => 'terkirim',
            'tanggal_terkirim' => Carbon::now(),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, Pesan $pesan)
    {
        $status = Pesan::where('id', $request->id)->first();
        $status->update([
            'status' => 'terbaca',
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}
