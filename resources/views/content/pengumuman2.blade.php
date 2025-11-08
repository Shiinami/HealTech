@extends('componen.app')
@section('content')
<section class="page-section" id="pengumuman2">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
            <h3 class="section-subheading text-muted">Hasil Seleksi Tahap 2 - HEALTECH UI/UX Design Competition</h3>
        </div>

        <div class="alert alert-success text-center">
            <h4>Selamat! Berikut adalah Tim yang berhasil melangkah ke BABAK FINAL.</h4>
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

                        ["NAMA TIM" => "TreeX", "ASAL INSTANTI" => "Universitas Informatika dan Bisnis Indonesia"],
                        ["NAMA TIM" => "Radical Duo", "ASAL INSTANTI" => "SMK Telkom Purwokerto"],
                        ["NAMA TIM" => "EasyManage", "ASAL INSTANTI" => "Universitas Sumatera Utara"],
                        ["NAMA TIM" => "Adelante", "ASAL INSTANTI" => "Universitas Malang"],
                        ["NAMA TIM" => "Tim Mihu-Mihu", "ASAL INSTANTI" => "Politeknik Negeri Malang"],
                        ["NAMA TIM" => "DuaSerangkai", "ASAL INSTANTI" => "BINUS University"],
                         ["NAMA TIM" => "D&D MouseHero", "ASAL INSTANTI" => "ITSK RS dr.Soepraoen Malang"],
                        ["NAMA TIM" => "Nasi UXduk", "ASAL INSTANTI" => "Universitas Jember"],
                        ["NAMA TIM" => "bwbw", "ASAL INSTANTI" => "Politeknik Negeri Jakarta"],
                        ["NAMA TIM" => "Ponapona", "ASAL INSTANTI" => "Universitas Sultan Ageng Tirtayasa"],
                        

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
                Jangan lupa untuk memantau grup secara berkala supaya tidak ketinggalan informasi terbaru mengenai Babak Final.  Perjuanganmu hampir sampai di garis akhir, tetap semangat dan terus berikan usaha terbaikmu!
            </p>
        </div>

        <div class="alert alert-warning text-center mt-4">
            <h5>Bagi Tim yang Belum Lolos</h5>
            <p class="mb-0">
               Perjalanan ini belum berakhir, hanya berganti arah. Setiap langkah yang kamu ambil telah membawa pelajaran berharga.  
    Terima kasih telah menjadi bagian dari perjalanan dan telah berpartisipasi dalam event Healthtech UI/UX kami.  
    Semoga pengalaman ini menjadi langkah awal menuju karya dan pencapaian yang lebih besar.
            </p>
        </div>
    </div>
</section>
@endsection
