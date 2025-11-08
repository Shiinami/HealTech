@extends('componen.app')

@section('content')
    <header class="hero">

    </header>

    <section class="page-section bg-light" id="s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Kompetisi</h2>
                <h3 class="section-subheading text-muted">Berbagai kompetisi menarik yang tersedia</h3>
            </div>
            <div class="row">
                <!-- Kompetisi UI/UX -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="competitions-item">
                        <a class="competitions-link"  >
                            <div class="competitions-hover d-flex align-items-center justify-content-center">
                                <div class="text-white text-center">
                                    <i class="fas fa-eye fa-2x mb-2"></i>
                                    <div class="fw-bold"><h3>DAFTAR</h3></div>
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

                        <div class="competitions-caption text-center mt-3">
                            <div class="competitions-caption-heading fw-bold">Mobile Legends</div>
                            <div class="competitions-caption-subheading text-muted">Game Competition</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection