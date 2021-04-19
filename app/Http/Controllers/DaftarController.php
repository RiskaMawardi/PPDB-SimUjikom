<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\Http\Request;
use PDF;
class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftars = Daftar::latest()->paginate(5);

        return view ('daftars.index' , compact('daftars'))
                ->with('i',(request()->input('page', 1)-1)*1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('daftars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'noreg'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'asal_sekolah'=>'required',
            'minat_jurusan'=>'required',
        ]);

        Daftar::create($request->all());

        return redirect()->route('daftars.index')
                ->with('success', 'Selamat , anda sudah terdaftar di SMK Merdeka Belajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        return view ('daftars.show',compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        return view ('daftars.edit',compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        $request->validate([
            'noreg'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'asal_sekolah'=>'required',
            'minat_jurusan'=>'required',
        ]);
            $daftar->update($request->all());

            return redirect()->route('daftars.index')
                    ->with('success' , 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete();

        return redirect()->route('daftars.index')
                ->with('success', 'Data Berhasil dihapus');
    }
    public function cetak()
    {
        $daftar = Daftar::all();

        $cetak = PDF::loadview('daftars.cetak', compact('daftar'));
        return $cetak->stream();
    }
}
