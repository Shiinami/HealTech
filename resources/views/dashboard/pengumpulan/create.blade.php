@extends('dashboard.layout')

@section('konten')
<div class="pb-3">
    <a href="{{ route('dashboard.pengumpulan.index') }}" class="btn btn-secondary">
        &laquo; Kembali</a>
</div>


<form action="{{ route('dashboard.pengumpulan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nama_tim" class="form-label">Nama Tim</label>
        <input type="text" class="form-control form-control-sm" name="nama_tim" id="nama_tim" placeholder="Nama Tim"
            value="{{ old('nama_tim') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Ketua</label>
        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Email Ketua"
            value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="pengumpulan" class="form-label">Upload File Tugas</label>
        <input type="file" class="form-control form-control-sm" name="pengumpulan" id="pengumpulan" accept=".zip,.rar,.7z" required>
        <small class="text-muted">File maksimal 10MB. Format: zip, rar, 7z.</small>
    </div>

    <button class="btn btn-primary" name="simpan" type="submit">Kumpulkan Tugas</button>
</form>
@endsection
