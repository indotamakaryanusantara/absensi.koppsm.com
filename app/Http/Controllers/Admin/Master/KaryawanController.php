<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Divisi;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
    public function index()
    {
        $user = User::where('active', 1)->get();
        return view('pages.admin.master.karyawan.dashboard', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        $cabang = Cabang::where('active', 1)->get();
        $jabatan = Jabatan::where('active', 1)->get();
        $divisi = Divisi::where('active', 1)->get();
        return view('pages.admin.master.karyawan.tambah', [
            'cabang' => $cabang,
            'jabatan' => $jabatan,
            'divisi' => $divisi,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $data['active'] = 1;
        $data['id_roles'] = 4;

        User::create($data);
        toast('Karyawan berhasil ditambahkan!', 'success');
        return redirect()->route('admin.karyawan');
    }

    public function edit(string $id)
    {
        $item = User::findOrFail($id);
        $cabang = Cabang::where('active', 1)->get();
        $jabatan = Jabatan::where('active', 1)->get();
        $divisi = Divisi::where('active', 1)->get();
        return view('pages.admin.master.karyawan.edit', [
            'item' => $item,
            'cabang' => $cabang,
            'jabatan' => $jabatan,
            'divisi' => $divisi,
        ]);
    }
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        $item->update($data);

        toast('Karyawan berhasil diupdate!', 'success');

        return redirect()->route('admin.karyawan');
    }

    public function delete(string $id)
    {
        $item = User::where('id', $id)->first();
        $data['active'] = 0;
        $item->update($data);

        return redirect()->route('admin.karyawan');
    }
}
