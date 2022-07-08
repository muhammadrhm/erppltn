<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perusahaan = perusahaan::all();
        return response()->json(
            [
                'data' => $perusahaan
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $data=Perusahaan::create([
            'nomor' => $request->id_perusahaan,
            'nama' => $request->nama_perusahaan,
            'nogrup' => $request->nogroup,
            'telp' => $request->telp,
            'email' => $request->email,
            'fax' => $request->fax,
            'alamat' => $request->alamat,
            'penambah' => $request->nama_perusahaan,
            'pengubah' => $request->nama_perusahaan,
            'delete_at' => '',
            'aktif' => 'Y'
        ]);
        $data->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $perusahaandet = perusahaan::find($id);
        return response()->json(
            [
                'data' => $perusahaandet
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id_p = request('id_perusahaan2');
        $perdet = perusahaan::find($id_p);
        $perdet->nama = request('nama_perusahaan2');
        $perdet->nogrup = request('nogroup2');
        $perdet->telp = request('telp2');
        $perdet->email = request('email2');
        $perdet->fax = request('fax2');
        $perdet->alamat = request('alamat2');
        $perdet->pengubah = request('nama_perusahaan2');
        $perdet->updated_at = now();
        $perdet->deleted_at = null;
        $perdet->aktif = 'Y';
        $perdet->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Ubah data sukses'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $id_p = request('id_perusahaan3');
        // dd($id_p);
        $perusahaan = Perusahaan::find($id_p);
        $perusahaan ->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data sukses dihapus'
            ]
            );
    }
}
