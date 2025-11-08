@extends('componen.app')

@section('content')
    <header class="hero">
        <div class="container">

        </div>

    </header>

    <section class="page-section bg-light py-5" id="a">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">About Us</h2>
                <h3 class="section-subheading text-muted">Informasi tentang ITSK, Prodi Informatika, HIMA Informatika dan kegiatan HealTech</h3>
            </div>

            <!-- ITEM 1 - ITSK (alternate position) -->
            <div class="row align-items-center mb-5 flex-md-row-reverse text-md-end">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/1.png') }}" class="about-icon" alt="HIMA Informatika" />
                </div>
                <div class="col-md-10">
                    <h4 class="text-uppercase fw-bold mb-2">Institut Teknologi Sains dan Kesehatan RS dr. Soepraoen</h4>
                    <p class="text-muted">
                        ITSK RS dr. Soepraoen Kesdam V/Brw Malang merupakan institusi pendidikan tinggi tenaga kesehatan
                        yang berada dibawah naungan Yayasan Wahana Bhakti Karya Husada yang berpusat di Jakarta. Yayasan
                        yang didirikan oleh para purnawirawan kesehatan angkatan darat ini bergerak di bidang penidikan dan
                        sosial yang menaungi beberapa institusi pendidikan kesehatan dibeberapa wilayah Indonesia.
                        <br>
                        ITSK RS dr. Soepraoen Kesdam V/Brw Malang berdiri berdasarkan Keputusan Menteri Pendidikan Nasional
                        RI Nomor: 593 / M / 2020 tanggal 24 Juni 2020 tentang Izin Perubahan Bentuk Politeknik Kesehatan RS
                        dr. Soepraoen Kesdam V/Brawijaya Malang di Kota Malang Menjadi Institut Teknologi, Sains, Dan
                        Kesehatan RS dr. Soepraoe YKesdam V/Brw di Kota Malang Provinsi Jawa Timur Yang Diselenggarakan Oleh
                        Yayasan Wahana Bhakti Karya Husada.
                    </p>
                </div>
            </div>

            <!-- ITEM 2 - Prodi Informatika -->
            <div class="row align-items-center mb-5">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/prodi.jpg') }}" class="about-icon" alt="Prodi Informatika" />
                </div>
                <div class="col-md-10">
                    <h4 class="text-uppercase fw-bold mb-2">Prodi Informatika</h4>
                    <p class="text-muted">
                        Program Studi Sarjana Informatika memiliki visi menjadi program studi terkemuka dalam mencetak
                        sumber daya manusia unggul di bidang Pengembangan Teknologi Informasi dan Teknologi Kesehatan.
                        <br>
                        Untuk mencapai visi tersebut, program studi ini menyelenggarakan pendidikan, penelitian, dan
                        pengabdian masyarakat yang berfokus pada pengembangan teknologi, didukung oleh sumber daya manusia
                        yang kompeten, infrastruktur yang memadai, serta tata kelola yang baik.
                        <br>
                        Selain itu, program studi juga aktif menjalin kerja sama nasional dan internasional guna memperkuat
                        tridharma perguruan tinggi, dengan tujuan menghasilkan lulusan berkualitas dan berdaya saing tinggi
                        di era digital dan kesehatan berbasis teknologi.
                    </p>
                </div>
            </div>

            <!-- ITEM 3 - HIMA (alternate position) -->
            <div class="row align-items-center mb-5 flex-md-row-reverse text-md-end">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/logoHima.png') }}" class="about-icon" alt="HIMA Informatika" />
                </div>
                <div class="col-md-10">
                    <h4 class="text-uppercase fw-bold mb-2">HIMA Informatika</h4>
                    <p class="text-muted">
                        Hima Informatika adalah organisasi mahasiswa Program Studi Informatika sebagai wadah kolaborasi,
                        pengembangan potensi, serta penyelenggara kegiatan teknologi seperti seminar dan kompetisi.
                    </p>
                </div>
            </div>

            <!-- ITEM 4 - HealTech -->
            <div class="row align-items-center mb-4">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/heal.jpg') }}" class="about-icon" alt="HealTech" />
                </div>
                <div class="col-md-10">
                    <h4 class="text-uppercase fw-bold mb-2">HealTech</h4>
                    <p class="text-muted">
                        HealTech adalah kegiatan kolaboratif antara HIMA dan Prodi Informatika untuk mendorong inovasi
                        digital
                        di sektor kesehatan. Peserta diajak berkreasi dalam menciptakan solusi teknologi yang bermanfaat
                        bagi
                        masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
