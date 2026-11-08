@extends('layouts.app')
@section('title', 'Pengelolaan Layanan')
@section('content')

<div class="page-header">
    <div>
        <h1>Pengelolaan Layanan 🪷</h1>
        <p>
            Daftar Layanan Perawatan ELORA Healing Studio.
        </p>
    </div>
</div>

<div class="content-card">
    <div class="table-heading">
        <div>
            <h2>Daftar Layanan</h2>
            <p>
                Informasi jenis perawatan, harga, durasi, dan status layanan.
            </p>
        </div>

        <span class="total-label">
            {{ count($layanan) }} Layanan
        </span>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Durasi</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($layanan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <strong>{{ $item['nama'] }}</strong>
                        </td>
                        <td>
                            {{ $item['kategori'] }}
                        </td>
                        <td>
                            Rp{{ number_format($item['harga'], 0, ',', '.') }}
                        </td>
                        <td>
                            {{ $item['durasi'] }}
                        </td>
                        <td>
                            <span class="status">
                                {{ $item['status'] }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
