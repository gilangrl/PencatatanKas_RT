<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function PengurusIndex()
    {
        $data = Pengurus::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('master.pengurus.index', compact('data'));
    }

    public function PengurusTampil()
    {
        $jabatanOptions = ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Anggota'];
        return view('master.pengurus.tambah', compact('jabatanOptions'));
    }

    public function PengurusAdd(Request $request)
    {
        
        // Validasi form
        $validatedData = $request->validate([
            'nama'          => 'required|string|max:255',
            'jabatan'       => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'nomer_telepon' => 'required|string',
            'email'         => 'required|email|max:255',
            'pekerjaan'     => 'required|string|max:255',
        ], 
        [
            'nama.required'           => 'Nama harus diisi.',
            'jabatan.required'        => 'Jabatan harus diisi.',
            'tanggal_lahir.required'  => 'Tanggal Lahir harus diisi.',
            'tanggal_lahir.date'      => 'Format Tanggal Lahir harus benar.',
            'jenis_kelamin.required'  => 'Jenis Kelamin harus diisi.',
            'jenis_kelamin.in'        => 'Jenis Kelamin harus "laki-laki" atau "perempuan".',
            'nomer_telepon.required'  => 'Nomer Telepon harus diisi.',
            'email.required'          => 'Email harus diisi.',
            'email.email'             => 'Format Email harus benar.',
            'pekerjaan.required'      => 'Deskripsi pekerjaan harus diisi.',

        ]);

        $peng = Pengurus::create($validatedData);
        // FUNGSI UNTUK UPLOD GAMBAR
        if ($request->hasFile('foto_profil')) {
            $gambar         = $request->file('foto_profil');
            $gambarName     = $gambar->getClientOriginalName();
            $gambar->move('foto_pengurus/', $gambarName);

            $peng->foto_profil = $gambarName;
            
        }else {
            $peng->foto_profil = null;
        }
            $peng->save();
            // dd($peng);
        return redirect()->route('PengurusIndex')->with('success', 'Data berhasil ditambahkan!');
    }

    public function PengurusEdit($id)
    {
        $data = Pengurus::find($id);
        $jabatanOptions = ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Anggota'];
        return view('master.pengurus.edit', compact('data','jabatanOptions'));
    }

    public function PengurusUpdate(Request $request,$id)
    {
        $data = Pengurus::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto_profil') && $request->file('foto_profil')->isValid()) {
            $gambar = $request->file('foto_profil');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_pengurus/', $gambarName);

            $data['foto_profil'] = $gambarName;
        } else {
            $data['foto_profil'] = null;
        }

        $data->save();

        // dd($data);
        return redirect()->route('PengurusIndex')->with('success', 'Data berhasil diupdate!');
    }

    public function PengurusDelete($id)
    {
        $data = Pengurus::find($id);
        $data->delete();
        return redirect()->route('PengurusIndex');

    }
}
