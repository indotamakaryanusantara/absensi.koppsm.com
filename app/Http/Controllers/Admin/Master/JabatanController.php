<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::where('active', 1)->get();
        $user = Auth::user();
        return view('pages.admin.master.jabatan.dashboard', [
            'jabatan' => $jabatan,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.master.jabatan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama_jabatan);
        $data['active'] = 1;

        Jabatan::create($data);
        toast('Jabatan berhasil ditambahkan!', 'success');
        return redirect()->route('admin-jabatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Jabatan::where('id', $id)->first();
        $data['active'] = 0;
        $item->update($data);

        return redirect()->route('admin-jabatan.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Jabatan::where('slug', $id)->first();

        return view('pages.admin.master.jabatan.edit', [
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

        $item = Jabatan::findOrFail($id);
        $item->update($data);
        toast('Jabatan berhasil diupdate!', 'success');
        return redirect()->route('admin-jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
