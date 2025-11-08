@extends('componen.app')
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading"></div>
            <div class="masthead-heading text-uppercase"></div>
            <div></div>
        </div>
    </header>
   <section class="page-section" id="info">
    <div class="container">
        <div class="row text-center">

            <!-- Pengumuman -->
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa-solid fa-bullhorn fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Pengumuman</h4>
                <p class="text-muted">Lihat daftar tim yang melaju ke-tahap selanjutnya.</p>
<a href="{{ route('pengumuman') }}" class="btn btn-primary" target="_blank">Tahap 1</a>
<a href="{{ route('pengumuman2') }}" class="btn btn-primary" target="_blank">Tahap 2</a>

            </div>

            <!-- Guidebook -->
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa-solid fa-book fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Guidebook</h4>
                <p class="text-muted">Unduh panduan resmi lomba untuk mengetahui aturan, alur, dan kriteria penilaian.</p>
                <a href="https://drive.google.com/file/d/1KCgn-bIt59Y0rVjBrCsAsd3I60XDNApZ/view?usp=drive_link"
                   class="btn btn-primary" target="_blank" rel="noopener noreferrer">Lihat Guidebook</a>
            </div>

            <!-- Info Pendaftaran -->
<!--            <div class="col-md-3">-->
<!--<span class="fa-stack fa-4x">-->
<!--    <i class="fas fa-circle fa-stack-2x text-primary"></i>-->
<!--    <i class="fas fa-folder-open fa-stack-1x fa-inverse"></i>-->
<!--</span>-->

<!--                <h4 class="my-3">Unggah Berkas Tahap 2</h4>-->
<!--                <p class="text-muted">Segera lakukan pembayaran sebelum <span class="fw-bold">5 September 2025</span> agar tim kamu dapat melanjutkan ke tahap 2.-->
<!--</p>-->


<!--<a href="#" class="btn btn-primary disabled mt-2 ms-2" tabindex="-1" aria-disabled="true">-->
<!--    Kumpulkan Bukti Pembayaran-->
<!--</a>-->

<!--<a href="#" class="btn btn-primary mt-2 disabled" tabindex="-1" aria-disabled="true">-->
<!--    Pengumpulan Berkas Tahap 2-->
<!--</a>-->

<!--            </div>-->

<div class="col-md-3 text-center">
    <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-folder-open fa-stack-1x fa-inverse"></i>
    </span>

    <h4 class="my-3">Unggah Berkas Tahap 2</h4>
    <p class="text-muted">
        Terima kasih telah mengunggah berkas tahap 2.  
        <span class="fw-bold text-success">
            Selamat! Kamu telah menyelesaikan tahap ini 🎉
        </span><br>
        <span style="color: #007bff; font-weight: 500;">Silakan tunggu pengumuman selanjutnya untuk info lebih lanjut.</span>
    </p>
</div>


            <!-- Kontak -->
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Kontak</h4>
                <p class="text-muted">Butuh bantuan? Hubungi panitia lomba untuk informasi lebih lanjut dan pertanyaan teknis.</p>
                <a href="https://wa.me/6285335175689" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Kontak kami</a>
            </div>

        </div>
    </div>
</section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Kompetisi</h2>
                <h3 class="section-subheading text-muted">Variasi kompetisi yang tersedia</h3>
            </div>
            <div class="row">
                <!-- Kompetisi UI/UX -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="competitions-item">
                        <a class="competitions-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="competitions-hover d-flex align-items-center justify-content-center">
                                <div class="text-white text-center">
                                    <i class="fas fa-eye fa-2x mb-2"></i>
                                    <div class="fw-bold">Lihat Detail</div>
                                </div>
                            </div>
                            <img class="img-fluid fixed-img" src="{{ asset('assets/healtext.png') }}" alt="UI/UX Design" />
                        </a>
                        <div class="competitions-caption text-center mt-3">
                            <div class="competitions-caption-heading fw-bold">UI/UX Design</div>
                            <div class="competitions-caption-subheading text-muted">Design Competition</div>
                        </div>
                    </div>
                </div>

                <!-- Kompetisi Mobile Legends -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="competitions-item">
                        <a class="competitions-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="comingsoon-hover d-flex align-items-center justify-content-center">
                                <div class="text-white text-center">
                                    <i class="fas fa-eye fa-2x mb-2"></i>
                                    <div class="fw-bold">
                                        <h2>COMING SOON</h2>
                                    </div>
                                </div>
                            </div>
                            <img class="img-fluid fixed-img" src="{{ asset('assets/img/mobilelegends.png') }}"
                                alt="Mobile Legends" />
                        </a>
                        <div class="competitions-caption text-center mt-3">
                            <div class="competitions-caption-heading fw-bold">Mobile Legends</div>
                            <div class="competitions-caption-subheading text-muted">Game Competition</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section id="a" class="page-section text-black" ">
                <div class="container">
                    <div class="text-center mb-5">
                            <h2 class="section-heading text-uppercase">HealTech</h2>
                            <h3 class="section-subheading text-muted">Sarana untuk meningkatkan skill dan pengetahuan generasi muda</h3>
                        </div>
                    <div class="row align-items-center">
                        <!-- KONTEN TEKS -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h2 class="fw-bold mb-4">HealTech</h2>
                            <p class="lead" style="text-align: justify;">
                                HealTech merupakan kegiatan yang diselenggarakan oleh HIMA Informatika dan Prodi Informatika Institut Teknologi Sains dan Kesehatan RS dr. Soepraoen Malang. Tujuan dari kegiatan ini adalah untuk meningkatkan skill dan kreativitas generasi muda dalam bidang teknologi, khususnya di sektor kesehatan.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-primary mt-4 px-4 py-2 text-uppercase">Selengkapnya</a>
                        </div>

                        <!-- GAMBAR / ILUSTRASI -->
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('assets/heal.jpg') }}" alt="Prodi Informatika" class="img-fluid" style="max-width: 80%; height: auto;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Media Partner-->
        <div class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                            <h2 class="section-heading text-uppercase">Media Partner</h2>
                        </div>
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/gdlstory/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/Logo GDLSTORY.jpg') }}" alt="Logo GDL Story" aria-label="GDL STORY Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/mahasiswasoepraoen/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/MHS.png') }}" alt="Logo Mahasiswa Soepraoen" aria-label="Mahasiswa Soepraoen Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/smktelkommalang/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/logoOsisMoklet.png') }}" alt="Logo Osis SMK Telkom Malang" aria-label="Osis SMK Telkom Malang Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/lombatekno/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/LombaTekno.webp') }}" alt="Logo Lomba Tekno" aria-label="Lomba Tekno Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/lombauiux/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/LombaUIUX.webp') }}" alt="Logo Lomba UI UX" aria-label="Lomba UI/UX Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/teknoevent/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/TeknoEvent25.webp') }}" alt="Logo Tekno Event" aria-label="Tekno Event Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/teknoeventcampus/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/TeknoEventCampus25.webp') }}" alt="Logo Tekno Event Campus" aria-label="Tekno Event Campus Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/_bemvokasiub/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/vokasiUB.png') }}" alt="Logo BEM Vokasi Universitas Brawijaya" aria-label="Vokasi Universitas Brawijaya Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/infolombait/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/infoLombaIT.png') }}" alt="Logo Info Lomba IT" aria-label="Info Lomba IT Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/himtiuinjkt/"><img class="w-75 h-75 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/Himti UIN Jakarta.png') }}" alt="Logo Himpunan Mahasiswa Teknik Informatika UIN Jakarta" aria-label="Himpunan Mahasiswa Teknik Informatika UIN Jakarta Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/bem_itsksoepraoen/"><img class="w-100 h-100 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/Bem.png') }}" alt="Logo BEM ITSK Rs dr. Soepraoen" aria-label="BEM ITSK Rs dr. Soepraoen Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/malangmedia/"><img class="w-100 h-100 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/malang media.png') }}" alt="Logo Malang Media" aria-label="Malang Media Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/kepanjenstory/"><img class="w-100 h-100 img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/kpj story.png') }}" alt="Logo Kepanjen Story" aria-label="Kepanjen Story Logo" /></a>
                    </div>
                </div>
            </div>
        </div>

                <!-- Contact-->
                <section class="page-section" id="contact">
                    <div class="container">
                        <div class="text-center mb-5">
                            <h2 class="section-heading text-uppercase">Kontak kami</h2>
                            <h3 class="section-subheading text-white">Hubungi kami melalui platform berikut.</h3>
                        </div>
                        <div class="row justify-content-center">
                            <!-- WhatsApp -->
                            <div class="col-md-4 text-center mb-4">
                                <a href="https://wa.me/6281533857066" target="_blank" class="text-decoration-none text-dark">
                                    <div class="mb-3">
                                        <i class="fa-brands fa-whatsapp fa-3x text-success"></i>
                                    </div>
                                    <h4 class="fw-bold text-white">WhatsApp</h4>
                                    <p class="text-white">+62 815-3385-7066</p>
                                </a>
                            </div>

                            <!-- Instagram -->
                            <div class="col-md-4 text-center mb-4">
                                <a href="https://www.instagram.com/himatif_aoen/" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="mb-3">
                                        <i class="fa-brands fa-instagram fa-3x text-danger"></i>
                                    </div>
                                    <h4 class="fw-bold text-white">Instagram</h4>
                                    <p class="text-white">@himatif_aoen</p>
                                </a>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <a href="https://www.instagram.com/healtech.aoen/" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="mb-3">
                                        <i class="fa-brands fa-instagram fa-3x text-danger"></i>
                                    </div>
                                    <h4 class="fw-bold text-white">Instagram</h4>
                                    <p class="text-white">@healtech.aoen</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">UI/UX Design Competition</h2>
                                            <p class="item-intro text-muted">Kompetisi desain antarmuka pengguna dan pengalaman
                                                pengguna untuk mahasiswa/i se-Indonesia.</p>
                                            <img class="img-fluid d-block mx-auto" src="{{ asset('assets/poster.png') }}"
                                                alt="..." />
                                            <p>UI/UX Design Competition merupakan bagian dari rangkaian acara teknologi yang menantang
                                                kreativitas dan inovasi peserta dalam merancang aplikasi atau website berbasis user
                                                experience terbaik. Peserta diminta untuk merancang prototipe digital berdasarkan tema
                                                yang telah ditentukan.</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Close Pendaftaran:</strong>
                                                    28 Agustus 2025
                                                </li>
                                                <li>
                                                    <strong>Tim:</strong>
                                                    2-3 orang per tim
                                                </li>
                                                <li>
                                                    <strong>Biaya Pendaftaran:</strong>
                                                    Rp. 30.000,- per tim
                                                </li>
                                            </ul>
                                            <!-- Timeline Horizontal -->
                                            <div class="timeline-wrapper my-5">
                                                <div class="position-relative d-flex justify-content-between align-items-start flex-wrap"
                                                    style="height: 120px;">
                                                    <!-- Garis horizontal -->
                                                    <div class="position-absolute start-0 w-100"
                                                        style="top: 11px; height: 4px; background-color: #ddd;"></div>

                                                    <!-- Timeline Items -->
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-danger mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small class="text-muted">Registrasi & pengumpulan abstrak</small></div>
                                                        <div class="mt-1"><small class="text-muted">28 juli–28 Agustus 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-succes mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2 fw-bold text-success"><small>Pengumuman Tahap 1</small></div>
                                                        <div class="mt-1 fw-bold text-success"><small class="text-muted">31 Agustus 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Close pembayaran Tahap 2</small></div>
                                                        <div class="mt-1"><small class="text-muted">5 September 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Pengerjaan Proposal Tahap 2</small></div>
                                                        <div class="mt-1"><small class="text-muted">30 Agustus - 2 Oktober 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Close Pengumpulan Tahap 2</small></div>
                                                        <div class="mt-1"><small class="text-muted">2 Oktober 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Pengumuman Tahap 2</small></div>
                                                        <div class="mt-1"><small class="text-muted">6 Oktober 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Technical Meeting</small></div>
                                                        <div class="mt-1"><small class="text-muted">8 Oktober 2025</small></div>
                                                    </div>
                                                    <div class="text-center position-relative" style="width: 12.5%;">
                                                        <div class="timeline-dot bg-warning mx-auto"
                                                            style="width: 18px; height: 20px; border-radius: 50%; position: relative; z-index: 2;">
                                                        </div>
                                                        <div class="mt-2"><small>Final Presentation</small></div>
                                                        <div class="mt-1"><small class="text-muted">13 Oktober 2025</small></div>
                                                    </div>
                                                </div>
                                            </div>




                                                                                
                                            <a href="#" class="btn btn-primary btn-xl text-uppercase disabled mt-2" tabindex="-1" aria-disabled="true"> 
                                            <i class="fa-solid fa-paper-plane me-1"></i>Kumpulkan Bukti Pembayaran</a>
                                            
                                                    <a href="{{ route('pengumpulan') }}" class="btn btn-primary btn-xl text-uppercase disabled mt-2" tabindex="-1" aria-disabled="true">
    <i class="fa-solid fa-paper-plane me-1"></i>Pengumpulan Berkas Tahap 2
</a>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">Mobile Legends Competition</h2>
                                            <p class="item-intro text-muted">Kompetisi Mobile Legends untuk mahasiswa/i se-Indonesia</p>
                                            <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/mobilelegends.png') }}" alt="..." />
                                            <p>Coming soon</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Close Pendaftaran:</strong>
                                                    Coming Soon
                                                </li>
                                                <li>
                                                    <strong>Tim:</strong>
                                                    Coming Soon
                                                </li>
                                                <li>
                                                    <strong>Biaya Pendaftaran:</strong>
                                                    Coming Soon
                                                </li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
