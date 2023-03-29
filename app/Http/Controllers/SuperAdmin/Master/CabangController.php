<?php

namespace App\Http\Controllers\SuperAdmin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


use App\Http\Requests\superadmin\CabangRequest;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabang = Cabang::where('active', 1)->get();
        $user = Auth::user();
        return view('pages.superadmin.master.cabang.dashboard', [
            'cabang' => $cabang,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.superadmin.master.cabang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama_cabang);
        $data['active'] = 1;

        Cabang::create($data);
        toast('Cabang berhasil ditambahkan!', 'success');
        return redirect()->route('superadmin-cabang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $item = Cabang::where('id', $id)->first();
        $data['active'] = 0;
        $item->update($data);

        return redirect()->route('superadmin-cabang.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Cabang::where('slug', $id)->first();
        $user = Auth::user();
        return view('pages.superadmin.master.cabang.edit', [
            'item' => $item,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama_cabang);
        $data['active'] = 1;

        $item = Cabang::findOrFail($id);
        $item->update($data);
        toast('Cabang berhasil diupdate!', 'success');
        return redirect()->route('superadmin-cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
