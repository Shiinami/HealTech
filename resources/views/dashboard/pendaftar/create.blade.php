@extends('dashboard.layout')

@section('konten')
<div class="pb-3">
    <a href="{{ route('dashboard.pendaftar.index') }}" class="btn btn-secondary">
        &laquo; Kembali</a>
</div>

<form action="{{ route('dashboard.pendaftar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nama_tim" class="form-label">Nama Tim</label>
        <input type="text" class="form-control form-control-sm" name="nama_tim" id="nama_tim" placeholder="Nama Tim"
            value="{{ old('nama_tim') }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_ketua" class="form-label">Nama Ketua</label>
        <input type="text" class="form-control form-control-sm" name="nama_ketua" id="nama_ketua" placeholder="Nama Ketua"
            value="{{ old('nama_ketua') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Ketua</label>
        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Email"
            value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">Nomor HP Ketua</label>
        <input type="text" class="form-control form-control-sm" name="no_hp" id="no_hp" placeholder="Contoh: 081234567890"
            value="{{ old('no_hp') }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_anggota_1" class="form-label">Nama Anggota 1</label>
        <input type="text" class="form-control form-control-sm" name="nama_anggota_1" id="nama_anggota_1" placeholder="Anggota 1"
            value="{{ old('nama_anggota_1') }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_anggota_2" class="form-label">Nama Anggota 2 (Opsional)</label>
        <input type="text" class="form-control form-control-sm" name="nama_anggota_2" id="nama_anggota_2" placeholder="Anggota 2"
            value="{{ old('nama_anggota_2') }}">
    </div>

    <div class="mb-3">
        <label for="kartu_identitas" class="form-label">Kartu Identitas (KTM/Kartu Pelajar)</label>
        <input type="file" class="form-control form-control-sm" name="kartu_identitas" id="kartu_identitas" accept=".zip,.rar,.7z" required>
    </div>

    <div class="mb-3">
        <label for="nama_sekolah" class="form-label">Asal Sekolah / Kampus</label>
        <input type="text" class="form-control form-control-sm" name="nama_sekolah" id="nama_sekolah" placeholder="Sekolah/Kampus"
            value="{{ old('nama_sekolah') }}" required>
    </div>

    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
</form>
@endsection
