<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordercomtroller extends Controller
{
    // buat fungsi untuk menyimpan data ke database
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'keberangkatan' => 'required',
            'kelas' => 'required',
            'tujuan' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'jumlah_penumpang' => 'required',
        ]);

        // simpan data ke database
        \App\Models\order::create($request->all());

        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }
}
