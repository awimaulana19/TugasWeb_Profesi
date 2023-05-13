<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProfesiCreateRequest;
use App\Http\Requests\ProfesiUpdateRequest;

class ProfesiController extends Controller
{
    public function index()
    {
        $profesi = Profesi::get();
        return view('home', compact('profesi'));
    }

    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin');
        }
        return back()->with('pesan-danger', 'Username atau Password anda salah');
    }

    public function admin()
    {
        $profesi = Profesi::get();
        return view('admin', compact('profesi'));
    }

    public function store(ProfesiCreateRequest $request)
    {
        $profesi = new Profesi();

        $profesi->nama_profesi = $request->nama_profesi;
        $profesi->minimal_gaji_bulanan = $request->minimal_gaji_bulanan;
        if ($request->file('foto')) {
            $profesi->foto = 'images/'.$request->file('foto')->store('');
        }

        $profesi->save();

        return redirect('/admin');
    }

    public function update(ProfesiUpdateRequest $request, $id)
    {
        $profesi = Profesi::where('id', $id)->first();

        $profesi->nama_profesi = $request->nama_profesiUpdate;
        $profesi->minimal_gaji_bulanan = $request->minimal_gaji_bulananUpdate;
        if ($request->file('fotoUpdate')) {
            if ($request->fotoLama) {
                File::delete($request->fotoLama);
            }
            $profesi->foto = 'images/'.$request->file('fotoUpdate')->store('');
        }

        $profesi->update();

        return redirect('/admin');
    }

    public function hapus($id)
    {
        $profesi = Profesi::where('id', $id)->first();
        if ($profesi->foto) {
            File::delete($profesi->foto);
        }

        $profesi->delete();

        return redirect('/admin');
    }
}
