<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::where('active', 1)->get();
        $user = Auth::user();
        return view('pages.admin.master.divisi.dashboard', [
            'divisi' => $divisi,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.master.divisi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama_divisi);
        $data['active'] = 1;

        Divisi::create($data);
        toast('Divisi berhasil ditambahkan!', 'success');
        return redirect()->route('admin-divisi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Divisi::where('id', $id)->first();
        $data['active'] = 0;
        $item->update($data);

        return redirect()->route('admin-divisi.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Divisi::where('slug', $id)->first();

        return view('pages.admin.master.divisi.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama_divisi);
        $data['active'] = 1;

        $item = Divisi::findOrFail($id);
        $item->update($data);
        toast('Divisi berhasil diupdate!', 'success');
        return redirect()->route('admin-divisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
