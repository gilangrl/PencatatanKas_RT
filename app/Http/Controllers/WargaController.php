<?php

namespace App\Http\Controllers;

use App\Charts\TotalPemasukanCharts;
use App\Models\Pembayaran;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function index()
    {
        return view('master.index');
    }

    public function wargaIndex(TotalPemasukanCharts $chart)
    {
        $data = Pembayaran::all();
        $chartData = $chart->line();
        $lineChart = $chart->build();
        return view('master.warga.index', compact('data', 'chartData', 'lineChart'));
    }

    public function wargaTampil()
    {
        $data = Warga::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('master.warga.tampilWarga', compact('data'));
    }

    public function wargaTambah()
    {
        return view('master.warga.tambahWarga');
    }

    public function wargaAdd(Request $request)
    {

        $data = [
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'nomer_telepon'     => $request->nomer_telepon,
            'email'             => $request->email,
            'status_kawin'      => $request->status_kawin,
            'pekerjaan'         => $request->pekerjaan,
        ];

        if ($request->hasFile('foto_profil') && $request->file('foto_profil')->isValid()) {
            $gambar = $request->file('foto_profil');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_warga/', $gambarName);

            $data['foto_profil'] = $gambarName;
        } else {
            $data['foto_profil'] = null;
        }

        $warga = Warga::create($data);

        // dd($warga);
        Alert::success('Data berhasil ditambahkan');
        return redirect()->route('wargaTampil');
    }

    public function wargaEdit($id)
    {
        $data = Warga::find($id);
        return view('master.warga.editWarga', compact('data'));
    }

    public function wargaUpdate(Request $request, $id)
    {
        $data = Warga::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto_profil') && $request->file('foto_profil')->isValid()) {
            $gambar = $request->file('foto_profil');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_warga/', $gambarName);

            $data['foto_profil'] = $gambarName;
        } else {
            $data['foto_profil'] = null;
        }

        $data->save();

        // dd($data);
        Alert::success('Data berhasil diupdate');
        return redirect()->route('wargaTampil');
    }

    public function wargaDelete($id)
    {
        $data = Warga::find($id);
        $data->delete();

        // dd($data);
        return redirect()->route('wargaTampil');
    }
}
