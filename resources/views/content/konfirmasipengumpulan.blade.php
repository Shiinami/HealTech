@extends('componen.app')

@section('content')
    <header class="hero">
        <div class="container">
        </div>

    </header>

    <section class="page-section bg-light py-5">
        <div class="container">
             <div class="alert alert-success text-center fw-bold fs-2" role="alert">
        PENGUMPULAN BERHASIL
    </div>
            <h2 class="text-center fw-bold mb-4">
    SELAMAT KAMU TELAH SUKSES MELAKUKAN PENGUMPULAN BERKAS UNTUK TAHAP 2!
</h2>
            <p class="text-center text-muted mb-5 fst-italic">
       Pengumpulan berkas <strong>Tahap 2</strong> akan diumumkan pada <strong> tanggal 2 Oktober 2025</strong>.<br>
                Pantau terus Instagram kami di <a href="https://instagram.com/healtech.aoen" target="_blank"><strong>@healtech</strong></a> untuk informasi dan pengumuman lebih lanjut, ya!<br>

                
 
            </p>

            <div class="text-center mb-4">
                <!-- Ganti link berikut dengan link grup WhatsApp yang sebenarnya -->
                <a href="https://instagram.com/healtech.aoen" target="_blank" class="btn btn-primary btn-lg">
    <i class="fab fa-instagram me-2"></i> Kunjungi Instagram HealTech
</a>


            </div>

            <div class="text-center mb-5">
                <!-- Tombol kembali ke halaman utama, ganti '/' sesuai route utama yang kamu pakai -->
                <a href="{{route('beranda')}}" class="btn btn-primary">
                    Kembali ke Halaman Utama
                </a>
            </div>

            <p class="text-center text-muted">
                Kalau ada pertanyaan atau butuh bantuan, jangan ragu untuk menghubungi admin kami:
            </p>

            <div class="container">

                <a href="https://wa.me/6285335175684" target="_blank" 
                   class="text-decoration-none text-dark d-flex justify-content-center align-items-center">
                    <i class="fa-brands fa-whatsapp fa-2x text-success me-3"></i>
                    <span><strong>Admin:</strong> +62 853-3517-5684 (Nada)</span>
                </a>
            </div>
        </div>
    </section>
@endsection
