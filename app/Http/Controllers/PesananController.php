<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesanan.pesanan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


     public function show($id)
     {
         // Gantilah ini dengan cara Anda mengambil data pesanan dari tabel "pesanan" berdasarkan ID
        //  $pesanan = Pesanan::find($id);

        //  if (!$pesanan) {
        //      // Handle jika data dengan ID yang diberikan tidak ditemukan
        //      return abort(404); // Tampilkan halaman 404 Not Found
        //  }

        //  return view('pesanan.pesanan', compact('pesanan'));
     }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
