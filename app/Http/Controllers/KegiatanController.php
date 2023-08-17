<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Pengurus;

class KegiatanController extends Controller
{   
    public function KegiatanIndex()
    {
        $data = Kegiatan::with('Pengurus')->get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
       return view('master.kegiatan.index', compact('data'));
    }   

    public function kegiatanTambah()
    {
        $data = Pengurus::all();
        return view('master.kegiatan.tambah', compact('data'));
    }

    public function kegiatanAdd(Request $request)
    {
       $data = Kegiatan::create([
        'nama_kegiatan'     => $request->nama_kegiatan,
        'tanggal_kegiatan'  => $request->tanggal_kegiatan,
        'deskripsi'         => $request->deskripsi,
        'lokasi'            => $request->lokasi,
        'id_pengurus'       => $request->nama,
       ]);

       // dd($data);
       return redirect()->route('KegiatanIndex')->with('success', 'Data berhasil ditambahkan!');
    }

    public function kegiatanEdit($id)
    {
        $data = Kegiatan::find($id);
        $peng = Pengurus::all();

        return view('master.kegiatan.edit',compact('data','peng'));
    }

    public function kegiatanUpdate(Request $request, $id)
    {
        $data = Kegiatan::find($id);
        $data->update([
            'nama_kegiatan'     => $request->nama_kegiatan,
            'tanggal_kegiatan'  => $request->tanggal_kegiatan,
            'deskripsi'         => $request->deskripsi,
            'lokasi'            => $request->lokasi,
            'id_pengurus'       => $request->nama,
        ]);
        // dd($data);
        return redirect()->route('KegiatanIndex')->with('success', 'Data berhasil diubah!');
    }

    public function kegiatanDelete($id)
    {
        $data = Kegiatan::find($id);
        $data->delete();

        // dd($data);
        return redirect()->route('KegiatanIndex');
    }
}
