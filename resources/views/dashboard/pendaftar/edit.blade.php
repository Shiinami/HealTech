@extends('dashboard.layout')

@section('konten')
<div class="container mt-5">
    <h2>Edit Data Pendaftar</h2>

    <form action="{{ route('dashboard.pendaftar.update', $pendaftar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label for="nama_tim">Nama Tim</label>
            <input type="text" name="nama_tim" id="nama_tim" class="form-control" value="{{ old('nama_tim', $pendaftar->nama_tim) }}" required>
        </div>

        <div class="mb-2">
            <label for="nama_ketua">Nama Ketua</label>
            <input type="text" name="nama_ketua" id="nama_ketua" class="form-control" value="{{ old('nama_ketua', $pendaftar->nama_ketua) }}" required>
        </div>

        <div class="mb-2">
            <label for="email">Email Ketua</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $pendaftar->email) }}" required>
        </div>

            <div class="mb-3">
        <label for="no_hp" class="form-label">Nomor HP Ketua</label>
        <input type="text" class="form-control form-control-sm" name="no_hp" id="no_hp" placeholder="Contoh: 081234567890"
            value="{{ old('no_hp', $pendaftar->no_hp) }}" required>
    </div>

        <div class="mb-2">
            <label for="nama_anggota_1">Nama Anggota 1</label>
            <input type="text" name="nama_anggota_1" id="nama_anggota_1" class="form-control" value="{{ old('nama_anggota_1', $pendaftar->nama_anggota_1) }}" required>
        </div>

        <div class="mb-2">
            <label for="nama_anggota_2">Nama Anggota 2 (Opsional)</label>
            <input type="text" name="nama_anggota_2" id="nama_anggota_2" class="form-control" value="{{ old('nama_anggota_2', $pendaftar->nama_anggota_2) }}">
        </div>

        <div class="mb-2">
    <label>Kartu Identitas Saat Ini:</label><br>
    <a href="{{ asset('storage/uploads/' . $pendaftar->kartu_identitas) }}" class="mb-2 d-block" target="_blank">
        {{ $pendaftar->kartu_identitas }}
    </a>
</div>

        <div class="mb-3">
            <label for="kartu_identitas">Upload Kartu Identitas Baru (jika ingin mengganti):</label>
<input type="file" name="kartu_identitas" id="kartu_identitas" class="form-control" accept=".zip, .rar, .7zip">
        </div>

        <div class="mb-2">
            <label for="nama_sekolah">Asal Sekolah/Kampus</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" value="{{ old('nama_sekolah', $pendaftar->nama_sekolah) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard.pendaftar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
