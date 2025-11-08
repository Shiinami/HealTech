@extends('dashboard.layout')

@section('konten')
<div class="container mt-5">
    <h2>Edit Data Pengumpulan Tugas</h2>

    <form action="{{ route('dashboard.pengumpulan.update', $pengumpulan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label for="nama_tim">Nama Tim</label>
            <input type="text" name="nama_tim" id="nama_tim" class="form-control" value="{{ old('nama_tim', $pengumpulan->nama_tim) }}" required>
        </div>

        <div class="mb-2">
            <label for="email">Email Ketua</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $pengumpulan->email) }}" required>
        </div>

        <div class="mb-2">
            <label>File Tugas Saat Ini:</label><br>
            <a href="{{ asset('storage' . $pengumpulan->pengumpulan) }}" class="mb-2 d-block" target="_blank">
                {{ $pengumpulan->pengumpulan }}
            </a>
        </div>

        <div class="mb-3">
            <label for="pengumpulan">Upload File Tugas Baru (jika ingin mengganti):</label>
            <input type="file" name="pengumpulan" id="pengumpulan" class="form-control" accept=".zip,.rar,.7z">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti file tugas.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard.pengumpulan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
