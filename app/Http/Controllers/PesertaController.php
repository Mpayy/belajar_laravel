<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranPeserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaranpeserta=PendaftaranPeserta::all();
        return view('pendaftaranpeserta.index', compact('pendaftaranpeserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendaftaranpeserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jurusan = $request->jurusan;
        $gelombang = $request->gelombang;
        $nama_lengkap = $request->nama_lengkap;
        $nik = $request->nik;
        $kartu_keluarga = $request->kartu_keluarga;
        $jenis_kelamin = $request->jenis_kelamin;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $pendidikan_terakhir = $request->pendidikan_terakhir;
        $nama_sekolah = $request->nama_sekolah;
        $kejuruan = $request->kejuruan;
        $nomor_hp = $request->nomor_hp;
        $email = $request->email;
        $aktivitas_saat_ini = $request->aktivitas_saat_ini;
        $status = $request->status;

        PendaftaranPeserta::create([
            'jurusan' => $jurusan,
            'gelombang' => $gelombang,
            'nama_lengkap' => $nama_lengkap,
            'nik' => $nik,
            'kartu_keluarga' => $kartu_keluarga,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'nama_sekolah' => $nama_sekolah,
            'kejuruan' => $kejuruan,
            'nomor_hp' => $nomor_hp,
            'email' => $email,
            'aktivitas_saat_ini' => $aktivitas_saat_ini,
            'status' => $status
        ]);
        return redirect()->route('pendaftaranpeserta.index');

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
    public function edit(string $id)
    {
        $pendaftaranpeserta = PendaftaranPeserta::find($id);
        return view('pendaftaranpeserta.edit', compact('pendaftaranpeserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendaftaranpeserta = PendaftaranPeserta::find($id);

        $pendaftaranpeserta->jurusan = $request->jurusan;
        $pendaftaranpeserta->gelombang = $request->gelombang;
        $pendaftaranpeserta->nama_lengkap = $request->nama_lengkap;
        $pendaftaranpeserta->nik = $request->nik;
        $pendaftaranpeserta->kartu_keluarga = $request->kartu_keluarga;
        $pendaftaranpeserta->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaranpeserta->tempat_lahir = $request->tempat_lahir;
        $pendaftaranpeserta->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaranpeserta->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pendaftaranpeserta->nama_sekolah = $request->nama_sekolah;
        $pendaftaranpeserta->kejuruan = $request->kejuruan;
        $pendaftaranpeserta->nomor_hp = $request->nomor_hp;
        $pendaftaranpeserta->email = $request->email;
        $pendaftaranpeserta->aktivitas_saat_ini = $request->aktivitas_saat_ini;
        $pendaftaranpeserta->status = $request->status;
        $pendaftaranpeserta->update();

        return redirect()->route('pendaftaranpeserta.index');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendaftaranpeserta = PendaftaranPeserta::find($id);
        $pendaftaranpeserta->delete();

        return redirect()->route('pendaftaranpeserta.index');
    }
}
