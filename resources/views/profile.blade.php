@extends('layouts.app')
@section('title','Profile')
@section('content')

<div class="page-header">
    <div>
        <h1>Profil Pengguna 👤</h1>

        <p>
            Berikut adalah informasi profil kamu.
        </p>
    </div>
</div>

<div class="profile-card">
    <h2>
        {{ $username }}
    </h2>

    <p class="profile-role">
        {{ $role }}
    </p>

    <div class="profile-divider"></div>

    <div class="profile-info">
        <div>
            <span>Username</span>
            <strong>{{ $username }}</strong>
        </div>
        <div>
            <span>Status Akun</span>
            <strong>Aktif</strong>
        </div>
    </div>

    <a href="{{ route('dashboard') }}" class="button-link">
        Kembali ke Dashboard
    </a>
</div>

@endsection
