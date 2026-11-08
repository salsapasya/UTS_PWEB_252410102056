@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="page-header">
    <div>
        <h1>Selamat Datang, {{ $username }}! 🌿</h1>

        <p>
            Berikut adalah layanan di ELORA Healing Studio.
        </p>
    </div>
</div>

{{-- RINGKASAN INFORMASI --}}
<div class="container">
    <div class="card">
        <div class="icon">🪷</div>
        <p>Total Layanan</p>
        <h2>{{ $jumlahLayanan }}</h2>
        <span>Layanan Perawatan</span>
    </div>

    <div class="card">
        <div class="icon">🍃</div>
        <p>Kategori Layanan</p>
        <h2>{{ $jumlahKategori }}</h2>
        <span>Kategori Perawatan</span>
    </div>
</div>

{{-- INFORMASI KLINIK --}}
<div class="content-card">
    <p class="small-text">ABOUT OUR CLINIC</p>
    <h2>Tentang ELORA Healing Studio</h2>
    <p>
        ELORA Healing Studio merupakan pusat perawatan
        holistic wellness yang menghadirkan layanan
        akupuntur dan terapi relaksasi dalam suasana
        yang nyaman dan menenangkan.
    </p>
    <p>
        Kami menghadirkan informasi layanan agar
        pengelolaan klinik menjadi lebih terorganisir.
    </p>
    <a href="{{ route('pengelolaan') }}"
        class="button-link">Lihat Daftar Layanan</a>
</div>

{{-- ALAMAT KLINIK --}}
<div class="location-card">
    <div>
        <p>Lokasi Klinik</p>
        <h3>{{ $alamat }}</h3>
    </div>
    <span>📍</span>
</div>

@endsection
