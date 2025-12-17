<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arre Technology</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        :root {
            --brand-900: #0a1f44;
            --accent: #4da6ff;
            --bg: #f5f8ff;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            scroll-behavior: smooth;
            padding-top: 80px;
        }

        nav {
            background: #fff !important;
        }

        nav a {
            color: #000 !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--accent) !important;
        }

        #navbarLogo {
            height: 40px;
            width: auto;
        }


        #portfolioGrid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .portfolio-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            position: relative;
            background: #fff;
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
        }

        .portfolio-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease, filter 0.3s ease;
        }

        .portfolio-card:hover img {
            transform: scale(1.08);
            filter: brightness(0.85);
        }

        .btn-hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }


        .main-footer {
            background-color: #ffffff;
            color: var(--brand-900);
            padding-top: 60px;
            border-top: 1px solid #e9ecef;
        }

        .footer-col-title {
            color: var(--brand-900);
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-link {
            color: #5a5a5a;
            transition: color 0.3s;
            line-height: 2.2;
            text-decoration: none;
        }

        .footer-link:hover {
            color: var(--accent);
        }

        .social-icon-circle {
            width: 40px;
            height: 40px;
            background-color: #495057;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .social-icon-circle:hover {
            background-color: var(--accent);
            transform: scale(1.1);
        }

        .copyright {
            background-color: #1a1e21;
            color: #ffffff;
            text-align: left;
            padding: 10px 0;
        }


        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            width: 45px;
            height: 45px;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, opacity 0.3s;
            opacity: 0.95;
        }

        #scrollToTopBtn:hover {
            background-color: #3c95e0;
            opacity: 1;
        }

        @media(max-width: 768px) {
            .portfolio-card img {
                height: 200px;
            }
        }

        @media(max-width: 576px) {
            .portfolio-card img {
                height: 180px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">
                <img src="/assets/img/logo-ws.png" alt="Logo" id="navbarLogo" class="logo-nav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="/#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5 container">
        <h2 class="text-center mb-4 animate__animated animate__fadeInDown">Portofolio</h2>
        <div class="border-bottom mb-5"></div>

        <div id="portfolioGrid">
            @forelse($items as $item)

            @php
            $gambar = json_decode($item->gambar, true);
            if (!is_array($gambar) || count($gambar) === 0) {
            $gambar = ['default.jpg'];
            }

            @endphp
            <div class="portfolio-item">
                <div class="card h-100 border-0 shadow-sm portfolio-card">

                    <img src="{{ asset('uploads/'.$gambar[0]) }}"
                        alt="   "
                        class="card-img-top img-fluid rounded">

                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title mb-2">{{ $item->nama }}</h5>

                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}
                        </p>

                        <div class="mt-auto d-flex justify-content-center gap-2">
                            <button class="btn btn-sm btn-outline-primary btn-hover-scale"
                                @if(!empty($item->link))
                                onclick="window.open('{{ $item->link }}', '_blank')"
                                @else
                                disabled
                                @endif>
                                Preview
                            </button>

                            <a href="{{ route('detail', $item->id) }}"
                                class="btn btn-sm btn-outline-primary btn-hover-scale">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 text-center">
                <p>Tidak ada klien yang ditemukan.</p>
            </div>
            @endforelse
        </div>
    </section>



    <footer class="main-footer">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">ARRE TECHNOLOGY</h5>
                    <p class="small mb-1">Jl. Suryat No.83, Gedog, Kec. Sananwetan, Kota Blitar, Jawa Timur 66132</p>
                    <p class="small mb-1"><strong>Phone:</strong> 0822-3131-6699</p>
                    <p class="small"><strong>Email:</strong> reza@dbn.net.id</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/#hero" class="footer-link small">> Home</a></li>
                        <li><a href="/#about" class="footer-link small">> About Us</a></li>
                        <li><a href="/#services" class="footer-link small">> Services</a></li>
                        <li><a href="#" class="footer-link small">> Terms of service</a></li>
                        <li><a href="#" class="footer-link small">> Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link small">> Web Design</a></li>
                        <li><a href="#" class="footer-link small">> Web Development</a></li>
                        <li><a href="#" class="footer-link small">> Product Management</a></li>
                        <li><a href="#" class="footer-link small">> Marketing</a></li>
                        <li><a href="#" class="footer-link small">> Graphic Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Social Networks</h5>
                    <div class="d-flex mt-3 flex-wrap gap-2">
                        <a href="#" class="social-icon-circle"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-skype"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-3 mt-4">
            <div class="container small">
                © Copyright <strong>Arre Technology</strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <button id="scrollToTopBtn" aria-label="Gulir ke atas" title="Ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        window.addEventListener("scroll", () => {
            scrollToTopBtn.style.display = window.scrollY > 200 ? "flex" : "none";
        });
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const card = entry.target.querySelector('.portfolio-card');
                    card.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        portfolioItems.forEach(item => observer.observe(item));
    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil!',
            text: '{{ session("success") }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

</body>

</html>