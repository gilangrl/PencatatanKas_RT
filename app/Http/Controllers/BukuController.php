<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BukuKas;

class BukuController extends Controller
{
    public function indexKas()
    {
        $data = BukuKas::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $totalAmountMasuk = BukuKas::sum('masuk');
        $totalKeluaran = BukuKas::sum('keluar');

        $totalAmountKas = $totalAmountMasuk - $totalKeluaran;

        return view('master.bukuKas.index', compact('data','totalAmountKas','totalKeluaran'));
    }

    public function TambahKas($value='')
    {
        return view('master.bukuKas.tambah');
    }

    public function AddKas(Request $request)
    {
        $data = BukuKas::create([
            'masuk' => $request->has('masuk') ? $request->masuk : null,
            'keluar' => $request->has('keluar') ? $request->keluar : null,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);
        // dd($data);
        return redirect()->route('indexKas')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function EditKas($id)
    {
        $data = BukuKas::find($id);
        return view('master.bukuKas.edit', compact('data'));
    }

    public function UpdateKas(Request $request, $id)
    {
        $data = BukuKas::find($id);
        $data->update([
            'masuk' => $request->masuk,
            'keluar' => $request->keluar,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);
        // dd($data);
        return redirect()->route('indexKas')->with('success', 'Data Berhasil Diupdate!');
    }
     
    public function DeleteKas($id)
    {
        $data = BukuKas::find($id);
        $data->delete();

        return redirect()->route('indexKas');
    }

    public function KasFilter(Request $request)
    {
        $tanggalAwal  = $request->tanggalAwal;
        $tanggalAkhir    = $request->tanggalAkhir;
        $totalAmountMasuk = BukuKas::sum('masuk');
        $totalKeluaran = BukuKas::sum('keluar');

        $totalAmountKas = $totalAmountMasuk - $totalKeluaran;

        $data = BukuKas::whereDate('tanggal', '>=' , $tanggalAwal)
                                    ->whereDate('tanggal', '<=', $tanggalAkhir)
                                    ->get();
        // dd($data);
        return view('master.bukuKas.index', compact('data','totalAmountKas','totalKeluaran')); 
    }

    public function KasCetak()
    {
        return view('master.bukuKas.cetakKas');
    }

    public function CetakKasPertanggal($startDate, $endDate)
    {
        // dd(["Tanggal awal :".$startDate,"Tanggal akhir :".$endDate]);
        $cetakPertanggal = BukuKas::whereBetween('tanggal', [$startDate, $endDate])->get();
        $tglCetak = Carbon::now('Asia/Jakarta')->format('Y-m-d');

        $totalAmountMasuk = BukuKas::sum('masuk');
        $totalKeluaran = BukuKas::sum('keluar');

        $totalAmountKas = $totalAmountMasuk - $totalKeluaran;

        return view('master.bukuKas.cetakKasPertanggal', compact('cetakPertanggal', 'tglCetak','totalAmountKas'));
    }
}
