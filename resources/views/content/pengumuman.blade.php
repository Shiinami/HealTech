@extends('componen.app')
@section('content')
<section class="page-section" id="pengumuman">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
            <h3 class="section-subheading text-muted">Hasil Seleksi Tahap 1 - HEALTECH UI/UX Design Competition</h3>
        </div>

        <div class="alert alert-success text-center">
            <h4>Selamat! Berikut adalah tim yang berhasil melangkah ke Tahap 2.</h4>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Tim</th>
                    <th>Asal Instansi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $tim = [
                        ["NAMA TIM" => "Kalyana", "ASAL INSTANTI" => "Universitas Slamet Riyadi Surakarta"],
                        ["NAMA TIM" => "Byte Bross", "ASAL INSTANTI" => "Institut Teknologi Sepuluh Nopember"],
                        ["NAMA TIM" => "BEBAS 36", "ASAL INSTANTI" => "Universitas Brawijaya"],
                        ["NAMA TIM" => "The Pawon", "ASAL INSTANTI" => "Universitas Harkat Negeri Tegal"],
                        ["NAMA TIM" => "FORKEYINCII", "ASAL INSTANTI" => "Universitas Indonesia"],
                        ["NAMA TIM" => "TreeX", "ASAL INSTANTI" => "Universitas Informatika dan Bisnis Indonesia"],
                        ["NAMA TIM" => "TMD", "ASAL INSTANTI" => "Politeknik Negeri Jakarta"],
                        ["NAMA TIM" => "DuoGanteng", "ASAL INSTANTI" => "SMK Telkom Sidoarjo"],
                        ["NAMA TIM" => "FunTech", "ASAL INSTANTI" => "Universitas Negeri Surabaya"],
                        ["NAMA TIM" => "IT Gurls", "ASAL INSTANTI" => "Universitas Negeri Surabaya"],
                        ["NAMA TIM" => "AXP Designer Team", "ASAL INSTANTI" => "Sekolah Tinggi Ilmu Komputer Yos Sudarso"],
                        ["NAMA TIM" => "404zadec", "ASAL INSTANTI" => "Institut Teknologi dan Bisnis Asia Malang"],
                        ["NAMA TIM" => "Mediva", "ASAL INSTANTI" => "Universitas Ahmad Dahlan"],
                        ["NAMA TIM" => "Domastic", "ASAL INSTANTI" => "Politeknik Negeri Bandung"],
                        ["NAMA TIM" => "Kokwet", "ASAL INSTANTI" => "Telkom University Purwokerto"],
                        ["NAMA TIM" => "Sumber Rejeki", "ASAL INSTANTI" => "Telkom University Surabaya"],
                        ["NAMA TIM" => "Teletubles", "ASAL INSTANTI" => "Universitas Surabaya"],
                        ["NAMA TIM" => "Sunny Souls", "ASAL INSTANTI" => "Universitas Islam Sultan Agung"],
                        ["NAMA TIM" => "Gak Kepikiran", "ASAL INSTANTI" => "Institut Teknologi Sumatera"],
                        ["NAMA TIM" => "Tim Protic", "ASAL INSTANTI" => "Politeknik Negeri Cilacap"],
                        ["NAMA TIM" => "Bestie", "ASAL INSTANTI" => "Institut Bisnis dan Teknologi Indonesia"],
                        ["NAMA TIM" => "Golden Hour", "ASAL INSTANTI" => "Politeknik Negeri Ujung Pandang"],
                        ["NAMA TIM" => "Turun Mesin", "ASAL INSTANTI" => "Sekolah Tinggi Ilmu Komputer Yos Sudarso"],
                        ["NAMA TIM" => "user bahagia", "ASAL INSTANTI" => "Universitas Udayana"],
                        ["NAMA TIM" => "SADARI", "ASAL INSTANTI" => "Jakarta International University"],
                        ["NAMA TIM" => "Asgarz", "ASAL INSTANTI" => "Universitas Negeri Surabaya"],
                        ["NAMA TIM" => "NutriMate", "ASAL INSTANTI" => "Universitas Brawijaya"],
                        ["NAMA TIM" => "Lucky Pixels", "ASAL INSTANTI" => "Universitas Mulawarman"],
                        ["NAMA TIM" => "vyntra", "ASAL INSTANTI" => "Politeknik Caltex Riau"],
                        ["NAMA TIM" => "NEXTY", "ASAL INSTANTI" => "Universitas Duta Bangsa Surakarta"],
                        ["NAMA TIM" => "D&D MouseHero", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "The Microinteractors", "ASAL INSTANTI" => "Universitas 17 Agustus 1945 Surabaya"],
                        ["NAMA TIM" => "Radical Duo", "ASAL INSTANTI" => "SMK Telkom Purwokerto"],
                        ["NAMA TIM" => "BEMOVIX", "ASAL INSTANTI" => "Universitas 17 Agustus 1945 Surabaya"],
                        ["NAMA TIM" => "Vama Care", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "Nasi UXduk", "ASAL INSTANTI" => "Universitas Jember"],
                        ["NAMA TIM" => "hahuhoheng", "ASAL INSTANTI" => "Universitas Brawijaya"],
                        ["NAMA TIM" => "ZIGMA GANK", "ASAL INSTANTI" => "Universitas Amikom Yogyakarta"],
                        ["NAMA TIM" => "OnePhase", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "DuaSerangkai", "ASAL INSTANTI" => "BINUS University"],
                        ["NAMA TIM" => "Adelante", "ASAL INSTANTI" => "Universitas Malang"],
                        ["NAMA TIM" => "EasyManage", "ASAL INSTANTI" => "Universitas Sumatera Utara"],
                        ["NAMA TIM" => "Ubuyashiki", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "El Codet", "ASAL INSTANTI" => "Universitas Muhammadiyah Surakarta"],
                        ["NAMA TIM" => "SABAR KING", "ASAL INSTANTI" => "Universitas Negeri Jakarta"],
                        ["NAMA TIM" => "Immortal", "ASAL INSTANTI" => "Politeknik Negeri Malang"],
                        ["NAMA TIM" => "Tartar", "ASAL INSTANTI" => "Universitas Jember"],
                        ["NAMA TIM" => "Tim Mihu-Mihu", "ASAL INSTANTI" => "Politeknik Negeri Malang"],
                        ["NAMA TIM" => "Hackathon Coder", "ASAL INSTANTI" => "BINUS University"],
                        ["NAMA TIM" => "Lyfe Design", "ASAL INSTANTI" => "Universitas Islam Negeri Antasari Banjarmasin"],
                        ["NAMA TIM" => "TibaTibaDesign", "ASAL INSTANTI" => "Universitas Negeri Surabaya"],
                        ["NAMA TIM" => "3 Dimensi", "ASAL INSTANTI" => "Telkom University"],
                        ["NAMA TIM" => "Oinkers", "ASAL INSTANTI" => "BINUS University"],
                        ["NAMA TIM" => "bwbw", "ASAL INSTANTI" => "Politeknik Negeri Jakarta"],
                        ["NAMA TIM" => "Antasari Team", "ASAL INSTANTI" => "UIN Antasari Banjarmasin"],
                        ["NAMA TIM" => "TehEsAnget", "ASAL INSTANTI" => "Politeknik Caltex Riau"],
                        ["NAMA TIM" => "Arunika", "ASAL INSTANTI" => "Universitas Nurdin Hamzah"],
                        ["NAMA TIM" => "Ubur-Ubur", "ASAL INSTANTI" => "Universitas Haluoleo"],
                        ["NAMA TIM" => "Semoga Juara", "ASAL INSTANTI" => "Universitas Negeri Yogyakarta"],
                        ["NAMA TIM" => "UIUXIN", "ASAL INSTANTI" => "Universitas Negeri Surabaya"],
                        ["NAMA TIM" => "Pulih", "ASAL INSTANTI" => "Universitas Pasundan"],
                        ["NAMA TIM" => "duoduar", "ASAL INSTANTI" => "Universitas Brawijaya"],
                        ["NAMA TIM" => "Himatesi Unibos", "ASAL INSTANTI" => "Universitas Bosowa"],
                        ["NAMA TIM" => "MindFuel", "ASAL INSTANTI" => "Institut Teknologi Sumatera"],
                        ["NAMA TIM" => "El Figma", "ASAL INSTANTI" => "Universitas Brawijaya"],
                        ["NAMA TIM" => "Kharya Creative", "ASAL INSTANTI" => "SMK Telkom Sidoarjo"],
                        ["NAMA TIM" => "AKSARALA", "ASAL INSTANTI" => "Universitas Lampung"],
                        ["NAMA TIM" => "CAREWITHUS", "ASAL INSTANTI" => "Universitas Airlangga"],
                        ["NAMA TIM" => "Athena", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "SALMON", "ASAL INSTANTI" => "Institut Teknologi Sepuluh Nopember"],
                        ["NAMA TIM" => "Susu Kental Manies", "ASAL INSTANTI" => "Universitas Negeri Jakarta"],
                        ["NAMA TIM" => "CreaThinkers", "ASAL INSTANTI" => "SMK Telkom Sidoarjo"],
                        ["NAMA TIM" => "Ponapona", "ASAL INSTANTI" => "Universitas Sultan Ageng Tirtayasa"],
                        ["NAMA TIM" => "JOSJIS UNAIR", "ASAL INSTANTI" => "Universitas Airlangga"],
                        ["NAMA TIM" => "Nesty", "ASAL INSTANTI" => "Universitas Surabaya"],
                        ["NAMA TIM" => "Chill Team", "ASAL INSTANTI" => "SMK Negeri 1 Giritontro"],
                        ["NAMA TIM" => "yuai yueks", "ASAL INSTANTI" => "Universitas Brawijaya"],

                    ];
                @endphp

                @foreach($tim as $i => $t)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $t["NAMA TIM"] }}</td>
                        <td>{{ $t["ASAL INSTANTI"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
               
        <div class="alert alert-success text-center">
            <h5>Kepada Tim yang Dinyatakan Lolos</h5>
            <p class="mb-0">
                Dimohon segera melakukan pembayaran sesuai ketentuan serta mengikuti arahan yang tercantum pada Guidebook.
            </p>
        </div>

        <div class="alert alert-warning text-center mt-4">
            <h5>Bagi Tim yang Belum Lolos</h5>
            <p class="mb-0">
                Percayalah, kesempatan lain akan selalu terbuka bagi mereka yang tidak berhenti berusaha. 
                Teruslah berkarya, karena karya terbaik sedang menanti untuk lahir dari tanganmu.
            </p>
        </div>
    </div>
</section>
@endsection
