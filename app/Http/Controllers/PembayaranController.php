<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pembayaran;
use App\Models\Warga;

class PembayaranController extends Controller
{
    public function PembayaranIndex()
    {
        $data = Pembayaran::with('warga')->get();
        $totalPembayaran = Pembayaran::sum('jumlah');
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('master.pembayaran.index',compact('data','totalPembayaran'));
    }

    public function PembayaranTambah()
    {
        $data = Warga::all();
        return view('master.pembayaran.tambah', compact('data'));
    }

    public function PembayaranAdd(Request $request)
    {
        $data = Pembayaran::create([
            'id_warga' => $request->nama,
            'jumlah' => $request->jumlah,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
        ]);

        // dd($data);
        return redirect()->route('pembayaranIndex')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function PembayaranEdit($id)
    {
        $data   = Pembayaran::find($id);
        $warga  = Warga::all();

        return view('master.pembayaran.edit', compact('data', 'warga'));
    }

    public function PembayaranUpdate(Request $request, $id)
    {
        $data = Pembayaran::find($id);
        $data->update([
            'id_warga' => $request->nama,
            'jumlah' => $request->jumlah,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
        ]);
        // dd($data);
        return redirect()->route('pembayaranIndex')->with('success', 'Data Berhasil Di Update!');
    }

    public function PembayaranDelete($id)
    {
        $data = Pembayaran::find($id);
        $data->delete();

        return redirect()->route('pembayaranIndex');
    }

    public function PembayaranFilter(Request $request)
    {
        $startDate  = $request->startDate;
        $endDate    = $request->endDate;
        $totalPembayaran = Pembayaran::sum('jumlah');
        
        $data = Pembayaran::whereDate('tanggal_pembayaran', '>=' , $startDate)
                                    ->whereDate('tanggal_pembayaran', '<=', $endDate)
                                    ->get();
        // dd($data);
        return view('master.pembayaran.index', compact('data','totalPembayaran'));            
    }

    public function PembayaranCetak()
    {
        return view('master.pembayaran.cetakPembayaran');
    }

    public function CetakPembayaranPertanggal($startDate, $endDate)
    {
        // dd(["Tanggal awal :".$startDate,"Tanggal akhir :".$endDate]);
        $cetakPertanggal = Pembayaran::with('Warga')->whereBetween('tanggal_pembayaran', [$startDate, $endDate])->get();
        $tglCetak = Carbon::now('Asia/Jakarta')->format('Y-m-d');

        return view('master.pembayaran.cetakPertanggal', compact('cetakPertanggal', 'tglCetak'));
    }
}
