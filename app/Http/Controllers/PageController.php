<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // MENAMPILKAN HALAMAN LOGIN
    public function login()
    {
        return view('login');
    }

    // MEMPROSES LOGIN
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $username = $request->input('username');

        // Simpan username ke session
        session(['username' => $username]);

        return redirect()->route('dashboard');
    }

    // MENAMPILKAN HALAMAN DASHBOARD
    public function dashboard(Request $request)
    {
        $username = session('username', 'ELORA Studio');

        $jumlahLayanan = 5;
        $jumlahKategori = 4;
        $alamat = 'Jl. Gangnam 04, Seoul';

        return view('dashboard', compact(
            'username',
            'jumlahLayanan',
            'jumlahKategori',
            'alamat'
            ));
    }

    // MENAMPILKAN HALAMAN PENGELOLAAN
    public function pengelolaan(Request $request)
    {
        $username = session('username', 'ELORA Studio');

        $layanan =[
            [
                'nama' => 'Akupuntur Tradisional',
                'kategori' => 'Akupunktur',
                'harga' => 150000,
                'durasi' => '60 menit',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Akupuntur Wajah',
                'kategori' => 'Kecantikan',
                'harga' => 175000,
                'durasi' => '45 Menit',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Terapi Relaksasi',
                'kategori' => 'Terapi',
                'harga' => 125000,
                'durasi' => '60 Menit',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Terapi Akupresur',
                'kategori' => 'Terapi',
                'harga' => 100000,
                'durasi' => '45 Menit',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Herbal Konsultasi',
                'kategori' => 'Konsultasi',
                'harga' => 75000,
                'durasi' => '30 Menit',
                'status' => 'Tersedia'
            ]
        ];

        return view('pengelolaan', [
            'username'=> $username,
            'layanan'=> $layanan
        ]);
    }

    // MENAMPILKAN HALAMAN PROFILE
    public function profile(Request $request)
    {
        $username = session('username', 'ELORA Studio');
        $role ='Customer';

        return view('profile', [
            'username'=> $username,
            'role'=> $role,
        ]);
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
