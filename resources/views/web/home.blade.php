@extends('web.layouts.main')

@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="d-flex align-items-center">
                <div class="logo">
                    <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
                        alt="logo" class="img-fluid">
                </div>
                <div class="d-flex flex-column text-muted mx-2">
                    <strong class="text-uppercase">DESA {{ kantorDesa()->kelurahan->nama ?? '' }}</strong>
                    <small>Kecamatan</small>
                </div>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Fitur</a></li>
                    <li><a class="getstarted" href="{{ route('penduduk.login') }}">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sistem Informasi Pelayanan Desa</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Kantor Desa
                        {{ kantorDesa()->kelurahan->nama ?? '' }}&nbsp;-&nbsp;{{ kantorDesa()->kecamatan->nama ?? '' }}
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ route('penduduk.login') }}" class="btn-get-started scrollto">Masuk Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('') }}web/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/kemendagri.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/kemendesa.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/kemkominfo.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/satudata-indonesia.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            Sistem Layanan Desa/Kelurahan merupakan salah satu Aplikasi Umum Sistem Pemerintah Berbasis
                            Elektronik Nasional yang diperuntukan bagi Pemerintah Tingkat Desa/Kelurahan dalam
                            meningkatkan keterpaduan dan efisiensi sistem guna mewujudkan Tata Kelola Pemerintahan yang
                            bersih, efektif, transparan, dan akuntabel serta pelayanan publik yang berkualitas dan
                            terpercaya.
                        </p>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Sistem Layanan Desa/Kelurahan dibangun sesuai dengan,
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>
                                Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 47 Tahun 2016 tentang
                                Administrasi Pemerintahan Desa.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Memenuhi Standar Pelayanan Minimal Desa berdasarkan Permendagri No.2 Tahun 2017.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Menjalankan amanat UU No.6 tahun 2014 tentang Desa.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Serta Perpres No 39 Tahun 2019 tentang Kebijakan Satu Data Indonesia.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Dan Peraturan Presiden Republik Indonesia Nomor 95 Tahun 2018 tentang Sistem
                                Pemerintahan Berbasis Elektronik.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Layanan</h2>
                    <p>Pelayanan Masyarakat Yang Prima Simbol Kinerja Pemerintahan Yang Sempurna</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Mudah Digunakan</a></h4>
                            <p class="description">
                                Tampilan Aplikasi yang dirancang untuk mudah dioperasikan oleh semua orang tanpa
                                membutuhkan keahlian khusus dalam menyelesaikan proses layanan mulai dari entry data
                                pemohon, entry data permohonan hingga proses pembuatan berkas dengan hasil output
                                dokumen fisik maupun digital.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Dashboard Technology</a></h4>
                            <p class="description">
                                Dengan menrapkan Multi User Teknologi Aplikasi, Layanan Desa mampu menyajikan informasi
                                pelayanan yang akurat yang termonitor oleh seluruh jajaran eksekutif/pimpinan di setiap
                                level Pemerintahan Melalui Dashboard Monitoring yang dilengkapi Business Intelegent dan
                                Analytics Technology.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Microservices</a></h4>
                            <p class="description">
                                Aplikasi Layanan Desa juga menggunakan teknologi microservices yang
                                memungkinkan aplikasi ini mampu terintegrasi dan dibagipakaikan dengan berbagai aplikasi
                                pemerintahan lain yang berbasis Layanan Masyarakat.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>FITUR UTAMA</h2>
                    <p>
                        Aplikasi Layanan Desa Dirancang Bangun secara kolaboratif melibatkan seluruh stakeholder
                        Pemerintahan Dari Tingkat Pemerintah Pusat, Pemeritah Daerah, hingga Pemerintah Desa, sehingga
                        Aplikasi Layanan Desa memiliki fitur-fitur yang bisa menjawab problematika dan memaksimalkan
                        proses pelayanan Maysarakat di Tingkat Pemerintah Desa
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                            <h3>Proses Permohonan Berkas Cepat dan Lengkap</h3>
                            <p>
                                Secara Standar Sistem Layanan Pemerintah Desa telah menyediakan 22 jenis Permohonan dan
                                29 jenis Berkas Layanan Surat yang secara umum diterbitkan oleh Pemerintahan Desa.
                            </p>
                            <ul>
                                <li>Buat Permohoan dan Proses Berkas Surat Pengantar Desa.</li>
                                <li>Buat Permohoan dan Proses Berkas Surat Keterangan Desa</li>
                                <li>Buat Permohoan dan Proses Berkas Surat Pernyataan Desa.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Setting Permohonan & Berkas Baru dengan Template Editor</h3>
                            <p>
                                Selain 22 Jenis Permohonan Dan 29 Jenis Berkas yang tersedia, Sistem Layanan Desa juga
                                dilengkapi Template Editor Permohonan dan Berkas untuk menambah dan melakukan modifikasi
                                jenis permohonan dan Berkas Surat Layanan Baru oleh Admin Daerah yang di butuhkan di
                                tingkat Desa.
                            </p>
                            <ul>
                                <li>Template Editor untuk membuat jenis permohonan baru.</li>
                                <li>Template Editor untuk membuat jenis berkas baru.</li>
                                <li>Setting / Edit Ulang Template Permohonan dan Berkas.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                            <h3>Kolaborasi Antara Pemerintah Pusat, Daerah dan Desa Dalam Penggunaan Aplikasi Layanan
                                Desa</h3>
                            <p>
                                Pengelolaan Aplikasi secara Multi User yang saling berkolaborasi antar level
                                pemerintahan dari Pengelolaan di Tingkat Pusat, Daerah Kabupaten/Kota, hingga
                                Desa/Kelurahan. Kolaborasi antar level pemerintahan ini akan menjamin keberlangsungan
                                pelayanan masyarakat berbasis teknologi yang berkelanjutan..
                            </p>
                            <ul>
                                <li>Administrator Pusat (Kementrian Kominfo, Kementrian Dalam Negeri, dan Kementrian
                                    Desa) melakukan aktivasi User di Level Daerah sebagai Administrator Kab/Kota
                                    Pengelola Aplikasi Layanan Desa di Wilayahnya.</li>
                                <li>Administrator Daerah (Diskominfo, DPMPD, Disdukcapil) melakukan aktivasi User di
                                    Level Pemerintah Desa sebagai Administrator Pelaksana pelayanan masyarakat melalui
                                    Aplikasi Layanan Desa.</li>
                                <li>Administrator Desa mengelola dan mengoperasikan Aplikasi Layanan Desa untuk melayani
                                    permohonan masyarakat yang dikelola melalui Aplikasi Layanan Desa.</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Pricing Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>{{ config('app.name') }}</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Created by
                        <a href="#">Kantor Desa
                            {{ kantorDesa()->kelurahan->nama ?? '' }}&nbsp;-&nbsp;{{ kantorDesa()->kecamatan->nama ?? '' }}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#hero" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#services" class="scrollto">Layanan</a>
                        <a href="#pricing" class="scrollto">Fitur</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
@endsection
