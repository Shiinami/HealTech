
@extends('componen.app')

@section('content')
    <header class="hero">
        <div class="container">
        </div>
    </header>

    <section class="page-section bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Pengumpulan Berkas Tahap 2 UI/UX Design Competition</h2>
            </div>
            
                    <div class="text-center mb-5">
                <h4 class="section-heading text-uppercase">Cek terlebih dahulu berkas tim kamu sebelum dikumpulkan!</h4>
            </div>
            
        <div class="row justify-content-center">
            <div class="col-lg-8">

                   <!-- <h2 class="text-center text-uppercase fw-bold mb-4">Form Pengumpulan</h2>-->

                    {{-- Message Handling --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Start --}}
                    <form id="registrationForm" method="POST" action="{{ route('pengumpulandepan') }}"
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
                            <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i> Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pengumpulan" class="form-label">
                            <i class="fas fa-id-card me-1"></i> File Berkas (zip, rar, 7z)
                                </label>
                            <input type="file" class="form-control @error('pengumpulan') is-invalid @enderror"
                                id="pengumpulan" name="pengumpulan" accept=".zip,.rar,.7z" required>
                            @error('pengumpulan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-1"></i> Kumpulkan Berkas tahap 2
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
    <header class="hero">
        <div class="container">
        </div>
    </header>

    <section class="page-section bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Pengumpulan Berkas Tahap 2 UI/UX Design Competition</h2>
            </div>
            
                                <div class="text-center mb-5">
                <h4 class="section-heading text-uppercase">Cek terlebih dahulu berkas tim kamu sebelum dikumpulkan!</h4>
            </div>
            
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!--    <h2 class="text-center text-uppercase fw-bold mb-4">Form Pengumpulan</h2>-->

                    {{-- Message Handling --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Start --}}
                    <form id="registrationForm" method="POST" action="{{ route('pengumpulandepan') }}"
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
                            <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i> Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pengumpulan" class="form-label">
                            <i class="fas fa-id-card me-1"></i> File Berkas (zip, rar, 7z)
                                </label>
                            <input type="file" class="form-control @error('pengumpulan') is-invalid @enderror"
                                id="pengumpulan" name="pengumpulan" accept=".zip,.rar,.7z" required>
                            @error('pengumpulan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-1"></i> Kumpulkan Berkas tahap 2
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </section>
    @endsection


@section('content')
    <header class="hero">
        <div class="container">
        </div>
    </header>

    <section class="page-section bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Pengumpulan Berkas Tahap 2 UI/UX Design Competition</h2>
            </div>
            
                                <div class="text-center mb-5">
                <h4 class="section-heading text-uppercase">Cek terlebih dahulu berkas tim kamu sebelum dikumpulkan!</h4>
            </div>
            
        <div class="row justify-content-center">
            <div class="col-lg-8">

                    <!--<h2 class="text-center text-uppercase fw-bold mb-4">Form Pengumpulan</h2>-->

                    {{-- Message Handling --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Start --}}
                    <form id="registrationForm" method="POST" action="{{ route('pengumpulandepan') }}"
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
                            <label for="email" class="form-label"><i class="fas fa-envelope me-1"></i> Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pengumpulan" class="form-label">
                            <i class="fas fa-id-card me-1"></i> File Berkas (zip, rar, 7z)
                                </label>
                            <input type="file" class="form-control @error('pengumpulan') is-invalid @enderror"
                                id="pengumpulan" name="pengumpulan" accept=".zip,.rar,.7z" required>
                            @error('pengumpulan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-1"></i> Kumpulkan Berkas Tahap 2
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </section>
    @endsection
