{{--@extends('componen.app')

@section('content')
    <header class="hero">
        <div class="container">
        </div>
    </header>

    <section class="page-section bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Daftar UI/UX Design Competition</h2>
            </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                    <h2 class="text-center text-uppercase fw-bold mb-4">Form Pendaftaran</h2>

                    {{-- Message Handling --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Start --}}
                    <form id="registrationForm" method="POST" action="{{ route('mendaftar.store') }}"
                        enctype="multipart/form-data" class="bg-white shadow rounded p-4">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Terjadi kesalahan!</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="nama_tim" class="form-label"><i class="fas fa-users me-1"></i> Nama Tim</label>
                            <input type="text" class="form-control @error('nama_tim') is-invalid @enderror"
                                id="nama_tim" name="nama_tim" value="{{ old('nama_tim') }}" required>
                            @error('nama_tim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_ketua" class="form-label"><i class="fas fa-user me-1"></i> Nama Lengkap Ketua
                                Tim</label>
                            <input type="text" class="form-control @error('nama_ketua') is-invalid @enderror"
                                id="nama_ketua" name="nama_ketua" value="{{ old('nama_ketua') }}" required>
                            @error('nama_ketua')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i> Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label"><i class="fas fa-phone me-1"></i> Nomor Telepon</label>
                            <input type="tel" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                                name="no_hp" value="{{ old('no_hp') }}" required>
                            @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_anggota_1" class="form-label"><i class="fas fa-user-friends me-1"></i> Nama
                                Anggota Tim 1</label>
                            <input type="text" class="form-control @error('nama_anggota_1') is-invalid @enderror"
                                id="nama_anggota_1" name="nama_anggota_1" value="{{ old('nama_anggota_1') }}" required>
                            @error('nama_anggota_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_anggota_2" class="form-label"><i class="fas fa-user-friends me-1"></i> Nama
                                Anggota Tim 2 (Opsional)</label>
                            <input type="text" class="form-control" id="nama_anggota_2" name="nama_anggota_2"
                                value="{{ old('nama_anggota_2') }}">
                        </div>

                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label"><i class="fas fa-school me-1"></i>
                                Sekolah/Institusi</label>
                            <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror"
                                id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}" required>
                            @error('nama_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kartu_identitas" class="form-label"><i class="fas fa-id-card me-1"></i> Kartu
                                Identitas KTM/Kartu Pelajar (.zip, .rar, .7z)</label>
                            <input type="file" class="form-control @error('kartu_identitas') is-invalid @enderror"
                                id="kartu_identitas" name="kartu_identitas" accept=".zip,.rar,.7z" required>
                            @error('kartu_identitas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-1"></i> Daftar Sekarang
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection --}}