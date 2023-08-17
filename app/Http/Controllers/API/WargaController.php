<?php

namespace App\Http\Controllers\API;

use App\Models\Warga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Warga::orderBy('nama', 'asc')->get();
        return response()->json([
            'status'    => true,
            'message'   => 'Data berhasil ditemukan',
            'data'      => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama'          => 'required',
            'alamat'        => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nomer_telepon' => 'required',
            'email'         => 'required',
            'status_kawin'  => 'required',
            'pekerjaan'     => 'required',
            'foto_profil'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi hanya jika ada file gambar
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menambahkan data',
                'data' => $validator->errors()
            ]);
        }

        $warga = Warga::create($request->all());

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('foto_warga'), $fileName);
            $warga->foto_profil = $fileName;
            $warga->save();
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Warga::find($id);
        if(empty($data)){
            return response()->json([
                'status' =>false,
                'message' =>'Data tidak ditemukan',
            ],404);
        }

        $post = $data->delete();

        return response()->json([
            'status' =>true,
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
