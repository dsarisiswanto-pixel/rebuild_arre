<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arre Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
        :root {
            --brand-900: #0a1f44;
            --brand-700: #1a3b7c;
            --accent: #4da6ff;
            --muted: #555;
            --bg: #f5f8ff;
        }

   
        body {
            height: 100%;
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            scroll-behavior: smooth;
            padding-top: 70px;
            margin: 0;
        }

        .object-fit-cover {
            object-fit: cover;
        }


        nav.navbar {
            background: #fff !important;
        }

        nav a {
            color: #000 !important;
            font-weight: 500;
        }

        nav a:hover {
            color: #1B3C53 !important;
        }

        #navbarLogo {
            height: 40px;
            width: auto;
        }

        .hero {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            padding: 140px 0 100px;
            color: #fff;
            min-height: 90vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(180deg, rgba(10, 31, 68, .15), rgba(26, 59, 124, .12));
        }

        .hero-title {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
            color: var(--accent);
        }

        .hero-sub {
            font-size: 20px;
            margin-top: 15px;
            opacity: .95;
        }

        .hero-image img {
            max-width: 450px;
            transition: transform .5s, box-shadow .5s;
            will-change: transform;
            backface-visibility: hidden;
        }


        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--brand-900);
            text-align: center;
            margin-bottom: 20px;
        }

        .section-line {
            width: 80px;
            height: 4px;
            background: var(--accent);
            margin: 0 auto 40px;
            border-radius: 2px;
        }

        .service-card,
        .portfolio-card {
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .06);
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .service-card:hover,
        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(77, 166, 255, .18);
        }

        .service-card h5,
        .portfolio-card h5 {
            color: var(--brand-900);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-card p,
        .portfolio-card p {
            color: var(--muted);
            flex-grow: 1;
        }


        .about-section {
            position: relative;
            background: #fff;
            padding: 100px 0;
            overflow: hidden;
        }

        .about-section::after {
            content: "";
            position: absolute;
            bottom: -60px;
            left: -60px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, var(--accent), transparent 70%);
            opacity: .2;
            z-index: -1;
        }

        .about-img {
            max-width: 90%;
            border-radius: 14px;
            filter: drop-shadow(0 25px 40px rgba(0, 0, 0, .35));
            transition: transform .3s ease;
        }

        .about-img:hover {
            transform: translateY(-8px) scale(1.02);
        }

        .about-text {
            font-size: 16px;
            line-height: 1.9;
            color: #374151;
            margin-bottom: 22px;
        }


        .btn-primary {
            background: var(--accent);
            border-color: var(--accent);
            font-weight: 600;
            transition: transform .3s, box-shadow .3s;
        }

        .btn-primary:hover {
            background: #3c95e0;
            border-color: #3c95e0;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(77, 166, 255, .28);
        }

        .btn-about {
            border-radius: 50px;
            padding: 10px 30px;
            transition: .3s;
        }

        .btn-about:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(77, 166, 255, .35);
        }

        .btn-wa {
            background: #0d6efd;
            color: #fff !important;
            font-weight: 600;
            border-radius: 6px;
            transition: .3s;
        }

        .btn-wa:hover {
            background: #0b5ed7;
            transform: translateY(-1px);
        }

        .portfolio-card {
            border-radius: 16px;
            overflow: hidden;
        }

        .portfolio-card img {
            transition: transform .5s ease;
        }

        .portfolio-card:hover img {
            transform: scale(1.08);
        }


        .clients {
            overflow: hidden;
        }

        .clients .logo-row {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .client-logo {
            max-height: 50px;
            max-width: 140px;
            opacity: .85;
            filter: grayscale(100%);
            transition: .3s;
        }

        .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }


        .main-footer {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            color: #fff;
            padding-top: 60px;
        }

      .footer-link {
            color: rgba(255, 255, 255, 0.85);
            transition: color 0.3s;
            line-height: 2.2;
        }

        .footer-link:hover {
            color: #ffffff;
        }

        .social-icon-circle {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .social-icon-circle:hover {
            background-color: var(--accent);
        }

        .copyright {
            background-color: rgba(0, 0, 0, 0.25);
            color: rgba(255, 255, 255, 0.7);
            text-align: left;
        }

        .object-fit-cover {
            object-fit: cover;
        }
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--accent);
            color: #fff;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            z-index: 1000;
        }

        #topProgress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            width: 0;
            background: linear-gradient(90deg, var(--accent), #3c95e0);
            z-index: 1100;
        }

        @media (max-width: 768px) {
            #navbarLogo {
                height: 35px;
            }

            .hero {
                padding: 100px 0 60px;
                text-align: center;
            }

            .hero-title {
                font-size: 38px;
            }

            .hero-sub {
                font-size: 16px;
            }

            .hero-image img {
                max-width: 300px;
                margin-bottom: 20px;
            }

            .section-title {
                font-size: 28px;
            }

            .about-section,
            .about-text {
                text-align: center;
            }
        }

        @media (max-width: 991px) {
            .clients .logo-row {
                overflow-x: auto;
                scroll-behavior: smooth;
            }
        }
    </style>
</head>

<body>

    <div id="topProgress" aria-hidden="true"></div>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm custom-navbar">

        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">
                <img src="/assets/img/logo-ws.png" alt="Logo" id="navbarLogo" class="logo-nav">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-wa ms-lg-2 px-3 py-2"
                            href="https://wa.me/6282231316699?text=Halo%20Arre%20Technology,%20saya%20ingin%20konsultasi"
                            target="_blank"
                            rel="noopener">
                            <i class="fab fa-whatsapp me-1"></i> Hubungi Kami
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <section id="hero" class="hero">
        <div class="hero-overlay" aria-hidden="true"></div>

        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="hero-text order-2 order-md-1" style="max-width: 550px;">
                <h1 class="hero-title animate__animated animate__zoomIn">
                    Jasa Pembuatan Website di Blitar
                </h1>

                <p class="hero-sub animate__animated animate__fadeInLeft animate__delay-1s">
                    Arre Technology — Solutions for Your Websites
                </p>

                <div class="hero-desc animate__animated animate__fadeInUp animate__delay-1s">
                    <p class="mb-4">
                        Kami membantu UMKM, bisnis, dan personal brand di Blitar untuk memiliki
                        website yang <strong>profesional, cepat, responsif</strong>, dan
                        <strong>SEO friendly</strong>. Mulai dari company profile, landing page,
                        hingga sistem custom sesuai kebutuhan bisnis Anda.
                    </p>

                    <div class="hero-actions d-flex gap-3 flex-wrap mb-4">
                        <a href="#kontak" class="btn btn-primary btn-lg px-4 shadow">
                            Konsultasi Gratis
                        </a>
                        <a href="#portfolio" class="btn btn-outline-light btn-lg px-4">
                            Lihat Portofolio
                        </a>
                    </div>

                    <div class="hero-badges d-flex flex-wrap gap-3">
                        <span class="badge bg-light text-dark px-3 py-2 shadow-sm">⚡ Fast Loading</span>
                        <span class="badge bg-light text-dark px-3 py-2 shadow-sm">📱 Responsive</span>
                        <span class="badge bg-light text-dark px-3 py-2 shadow-sm">🔍 SEO Friendly</span>
                        <span class="badge bg-light text-dark px-3 py-2 shadow-sm">🔒 Secure</span>
                    </div>
                </div>
            </div>


            <div class="hero-image order-1 order-md-2 animate__animated animate__fadeInRight animate__delay-1s">
                <img src="/assets/img/tes2.png" alt="Website Creator Illustration" class="img-fluid" id="heroImg">
            </div>
        </div>
    </section>
    <section id="about" class="about-section py-5">
        <div class="container">
            <h2 class="section-title reveal">Tentang Kami</h2>
            <div class="section-line"></div>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 text-center reveal">
                    <img src="/assets/img/About us page-rafiki.png" class="img-fluid about-img" alt="About">
                </div>

                <div class="col-md-6 reveal">
                    <p class="about-text">
                        <strong>Arre Technology</strong> adalah perusahaan pengembang software yang berfokus pada
                        solusi digital di Blitar, Jawa Timur. Layanan kami meliputi pembuatan situs web,
                        maintenance, custom software, hingga mobile app development.
                        Kami membantu bisnis dan institusi untuk <strong>bertransformasi secara digital</strong>.
                    </p>

                    <a class="btn btn-primary btn-about mt-3" href="#kontak">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="py-5 container">
        <h2 class="section-title reveal">Layanan</h2>
        <p class="text-center mb-5">Arre Technology menawarkan layanan yang diformulasikan untuk menjawab kebutuhan
            teknologi serta digitalisasi produk. Setiap produk memiliki DNA-nya sendiri — konsultasikan ide Anda dengan
            kami.</p>
        <div class="section-line"></div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-globe fa-3x mb-3 text-primary"></i>
                    <h5>Website Development</h5>
                    <p>Website cepat, SEO friendly, dan mudah digunakan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-primary"></i>
                    <h5>Mobile App Development</h5>
                    <p>Aplikasi Android & iOS untuk memperluas jangkauan pelanggan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-rocket fa-3x mb-3 text-primary"></i>
                    <h5>MVP Development</h5>
                    <p>Kembangkan MVP untuk menguji ide dan peluang pasar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-cogs fa-3x mb-3 text-primary"></i>
                    <h5>Custom Software Development</h5>
                    <p>Sistem yang disesuaikan untuk efisiensi proses bisnis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-paint-brush fa-3x mb-3 text-primary"></i>
                    <h5>UI/UX Design</h5>
                    <p>Desain yang memaksimalkan pengalaman dan konversi pengguna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-file-alt fa-3x mb-3 text-primary"></i>
                    <h5>Specification Document & Wireframe</h5>
                    <p>Dokumen teknis & wireframe untuk perencanaan proyek.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4">Portfolio</h2>
            <div class="section-line mb-5"></div>

            @php
            $chunks = $items->chunk(3);
            $active = true;
            @endphp

            <div id="clientCarousel" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">

                    @foreach($chunks as $chunk)
                    <div class="carousel-item {{ $active ? 'active' : '' }}">
                        <div class="row g-4">

                            @foreach($chunk as $item)
                            @php
                            $gambar = json_decode($item->gambar, true);
                            $foto = $gambar[0] ?? 'default.png';
                            @endphp

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card h-100 shadow-sm portfolio-card">


                                    <div style="height:200px; overflow:hidden;">
                                        <img src="{{ asset('uploads/' . $foto) }}"
                                            class="w-100 h-100"
                                            style="object-fit:cover;"
                                            alt="{{ $item->nama }}">
                                    </div>

                                    <div class="card-body d-flex flex-column text-center">
                                        <h5 class="fw-bold">{{ $item->nama }}</h5>
                                        <p class="small text-muted">
                                            {{ Str::limit($item->deskripsi, 80) }}
                                        </p>

                                        <div class="mt-auto d-flex gap-2 justify-content-center">
                                            @if($item->link)
                                            <button class="btn btn-sm btn-outline-primary"
                                                onclick="window.open('{{ $item->link }}','_blank')">
                                                Preview
                                            </button>
                                            @endif
                                            <a href="{{ route('detail', $item->id) }}"
                                                class="btn btn-sm btn-outline-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach

                </div>

                @if($items->count() > 3)
                <button class="carousel-control-prev"
                    type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next"
                    type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                @endif
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('client.all') }}" class="btn btn-lg btn-primary">
                    Lihat Semua Portofolio
                </a>
            </div>
        </div>
    </section>

    <section class="clients py-5">
        <h2 class="section-title reveal">Client Kami</h2>
        <div class="section-line"></div>
        <div class="container-fluid px-4 px-lg-5">
            <div class="logo-row">
                <img src="/assets/img/logo-perusahaan/1.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/2.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/3.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/4.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/5.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/6.png" class="client-logo" alt="">
                <img src="/assets/img/logo-perusahaan/C.png" class="client-logo" alt="">
                <img src="/assets/img/WhatsApp Image 2025-12-17 at 09.08.13.jpeg" class="client-logo" alt="">
            </div>
        </div>
    </section>



    <section id="faq" class="py-5 container">
        <h2 class="section-title reveal">FAQ</h2>
        <p class="text-center">Berikut beberapa pertanyaan yang sering diajukan.</p>
        <div class="section-line"></div>

        <div class="accordion accordion-flush" id="faqAccordion">
            <div class="accordion-item reveal" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Apa saja layanan yang disediakan Arre Technology?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Arre Technology menyediakan layanan pembuatan website dan sistem informasi.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Data apa yang diperlukan untuk pengerjaan website?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami membutuhkan profil pemilik seperti nama, alamat, nomor telepon, logo, dan deskripsi lengkap.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apakah bisa dibuka di berbagai device?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Semua website kami responsive dan bisa diakses di smartphone, tablet, dan desktop.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Berapa lama proses pembuatan website?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Waktu pengerjaan tergantung tingkat kesulitan dan jumlah halaman. Estimasi diberikan setelah
                        menerima data lengkap.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="1s">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bagaimana dengan tema website?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami menyediakan template dan juga menerima desain sesuai permintaan klien.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5 container">
        <h2 class="section-title reveal">KONTAK KAMI</h2>
        <div class="section-line"></div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center reveal">
                <img src="/assets/img/Contact us.gif" class="img-fluid" alt="Kontak Arre Technology"
                    style="max-height: 300px; border-radius: 15px;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm mb-5 border-0 rounded-4 reveal">
                    <div class="card-body p-4 p-md-5">

                        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Location</h5>
                                <p class="text-muted mb-0 small">Jl. Suryat No.83, Gedog, <br>Kec. Sananwetan, <br>Kota
                                    Blitar, Jawa Timur 66132</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Email</h5>
                                <p class="text-muted mb-0 small">reza@dbn.net.id</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-phone fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Telp/WA</h5>
                                <p class="text-muted mb-0 small">0822-3131-6699</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <a href="https://maps.google.com/?q=Jl.+Suryat+No.83,+Gedog,+Blitar" target="_blank"
            class="btn btn-sm btn-outline-secondary d-inline-block mb-3">Lihat peta lebih besar</a>

        <div class="map-container reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.412157168169!2d112.14950387542496!3d-8.093249594180502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd619c26a8fcb91%3A0x15e69c3f632eec91!2sJl.%20Suryat%20No.83%2C%20Gedog%2C%20Blitar%2C%20Jawa%20Timur%2066132!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container pt-5">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">ARRE TECHNOLOGY</h5>
                    <p class="small text-secondary mb-1">Jl. Suryat No.83, Gedog, Kec. Sananwetan, Kota Blitar, Jawa
                        Timur 66132</p>
                    <p class="small mb-1 text-secondary"><strong>Phone:</strong> 0822-3131-6699</p>
                    <p class="small text-secondary"><strong>Email:</strong> reza@dbn.net.id</p>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#hero" class="text-decoration-none footer-link small">> Home</a></li>
                        <li><a href="#about" class="text-decoration-none footer-link small">> About Us</a></li>
                        <li><a href="#services" class="text-decoration-none footer-link small">> Services</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Terms of service</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none footer-link small">> Web Design</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Web Development</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Product Management</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Marketing</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Social Networks</h5>
                    <div class="d-flex mt-3">
                        <a href="#" class="social-icon-circle me-2 "><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-skype"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright py-3 mt-4">
            <div class="container small">
                © Copyright <strong class="text-white">Arre Technology</strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <button id="scrollToTopBtn" aria-label="Gulir ke atas" title="Ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        if (typeof WOW !== 'undefined') {
            new WOW().init();
        }


        function scrollToHash(hash) {
            if (!hash) return;
            const el = document.querySelector(hash);
            if (!el) return;
            const navHeight = document.querySelector('.navbar').offsetHeight;
            const top = el.getBoundingClientRect().top + window.pageYOffset - navHeight - 12;
            window.scrollTo({
                top,
                behavior: 'smooth'
            });
        }


        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.length > 1) {
                    e.preventDefault();
                    scrollToHash(href);

                    const bsCollapse = document.querySelector('#navbarNav');
                    if (bsCollapse && bsCollapse.classList.contains('show')) {
                        new bootstrap.Collapse(bsCollapse).toggle();
                    }
                }
            });
        });


        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        window.addEventListener('scroll', () => {
            if (window.scrollY > 220) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


        const topProgress = document.getElementById('topProgress');

        function updateTopProgress() {
            const doc = document.documentElement;
            const scrollTop = doc.scrollTop || document.body.scrollTop;
            const height = doc.scrollHeight - doc.clientHeight;
            const percent = height ? Math.round((scrollTop / height) * 100) : 0;
            topProgress.style.width = percent + '%';
        }
        window.addEventListener('scroll', updateTopProgress);
        window.addEventListener('resize', updateTopProgress);
        updateTopProgress();


        const reveals = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');

                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        reveals.forEach(el => revealObserver.observe(el));


        const sections = Array.from(document.querySelectorAll('section[id]'));
        const navLinks = Array.from(document.querySelectorAll('.navbar .nav-link'));
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === '#' + id);
                    });
                }
            });
        }, {
            threshold: 0.45
        });

        sections.forEach(sec => sectionObserver.observe(sec));


        const heroImg = document.getElementById('heroImg');
        if (heroImg) {
            window.addEventListener('scroll', () => {
                const scrolled = window.scrollY;
                const offset = Math.min(Math.max(scrolled * 0.08, 0), 40);
                heroImg.style.transform = `translateY(${offset}px)`;
            });
        }
    </script>
</body>

</html>