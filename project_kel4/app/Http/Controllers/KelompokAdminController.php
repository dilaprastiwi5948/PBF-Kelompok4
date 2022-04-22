<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokAdmin;

class KelompokAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination 
        $kelompokadmin = KelompokAdmin::all(); // Mengambil semua isi tabel 
        $posts = KelompokAdmin::orderBy('id', 'desc')->paginate(6); 
        return view('kelompokadmin.index', compact('kelompokadmin')); 
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelompokadmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'id' => 'required', 
            'nama' => 'required', 
            'status' => 'required', 
            'bulan' => 'required',
        ]);   
        //fungsi eloquent untuk menambah data 
        KelompokAdmin::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kelompokadmin.index')
            ->with('success', 'Nama Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa 
        $kelompokadmin = KelompokAdmin::find($id); 
        return view('kelompokadmin.detail', compact('kelompokadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $kelompokadmin = KelompokAdmin::find($id); 
        return view('kelompokadmin.edit', compact('kelompokadmin'));
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
        //melakukan validasi data
        $request->validate([
            'id' => 'required', 
            'nama' => 'required', 
            'status' => 'required', 
            'bulan' => 'required', 
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita 
        KelompokAdmin::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('kelompokadmin.index') 
            ->with('success', 'Nama Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        KelompokAdmin::find($id)->delete(); 
        return redirect()->route('kelompokadmin.index') 
            -> with('success', 'Nama Berhasil Dihapus');
    }
}
