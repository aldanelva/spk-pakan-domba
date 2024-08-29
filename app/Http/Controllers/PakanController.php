<?php

namespace App\Http\Controllers;

use App\Models\Pakan;
use Illuminate\Http\Request;

class PakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakans = Pakan::all();
        return view('moduls.dashboard.pakan', compact('pakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'kode_alternatif' => 'required|unique:pakans,kode_alternatif',
        'jenis_pakan' => 'required|string',
        'serat' => 'required|numeric|min:0',
        'lemak' => 'required|numeric|min:0',
        'abu' => 'required|numeric|min:0',
        'protein' => 'required|numeric|min:0',
        'harga' => 'required|string',
        'jarak' => 'required|string',
        'ketersediaan' => 'required|string'
    ]);

    // Membuat instance Pakan baru
    $pakan = new Pakan();
    $pakan->kode_alternatif = $request->kode_alternatif;
    $pakan->jenis_pakan = $request->jenis_pakan;
    $pakan->serat = $request->serat;
    $pakan->lemak = $request->lemak;
    $pakan->abu = $request->abu;
    $pakan->protein = $request->protein;
    $pakan->harga = $request->harga;
    $pakan->jarak = $request->jarak;
    $pakan->ketersediaan = $request->ketersediaan;
    $pakan->save();

    // Menampilkan pesan sukses
    toast('Data pakan baru telah ditambahkan!', 'success');

    // Redirect ke halaman daftar pakan
    return redirect()->route('pakan');
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
        $pakan = Pakan::findOrFail($id);
        $pakans = Pakan::all();
        return view('moduls.dashboard.pakan_edit', compact('pakan', 'pakans'));
    }
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $pakan = Pakan::findOrFail($id);

    $request->validate([
        'kode_alternatif' => 'required|string|max:255',
        'jenis_pakan' => 'required|string|max:255',
        'serat' => 'required|numeric',
        'lemak' => 'required|numeric',
        'abu' => 'required|numeric',
        'protein' => 'required|numeric',
        'harga' => 'required|string|in:Sangat Murah,Cukup,Mahal,Sangat Mahal',
        'jarak' => 'required|string|in:Jauh,Dekat,Sangat Dekat,Cukup',
        'ketersediaan' => 'required|string|in:Cukup,Sangat Banyak,Banyak,Sedikit',
    ]);

    $kode_exist = Pakan::where('kode_alternatif', $request->kode_alternatif)
                       ->where('id', '!=', $id)
                       ->first();
    if ($kode_exist) {
        toast('Kode Alternatif sudah dipakai !', 'error');
        return redirect()->route('pakan.edit', $id)->withInput();
    }

    $pakan->kode_alternatif = $request->kode_alternatif;
    $pakan->jenis_pakan = $request->jenis_pakan;
    $pakan->serat = $request->serat;
    $pakan->lemak = $request->lemak;
    $pakan->abu = $request->abu;
    $pakan->protein = $request->protein;
    $pakan->harga = $request->harga;
    $pakan->jarak = $request->jarak;
    $pakan->ketersediaan = $request->ketersediaan;
    $pakan->save();

    toast('Data pakan berhasil diperbarui!', 'success');

    return redirect()->route('pakan');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $pakan = Pakan::findOrFail($request->id);
        $pakan->delete();

        toast('Data pakan berhasil dihapuskan!', 'success');

        return redirect()->route('pakan');
    }
}
