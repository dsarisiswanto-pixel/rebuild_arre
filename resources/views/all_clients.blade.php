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
            --brand-700: #0f2f66;
            --accent: #4da6ff;
            --bg: #f5f8ff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            scroll-behavior: smooth;
            padding-top: 80px;
        }


        nav {
            background: #fff !important
        }

        nav a {
            color: #000 !important;
            font-weight: 500;
            transition: .3s
        }

        nav a:hover {
            color: var(--accent) !important
        }

        #navbarLogo {
            height: 40px
        }


        .portfolio-section {
            background: #fff
        }

        .section-line {
            width: 70px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px
        }

        .portfolio-hero-img {
            max-width: 90%;
            animation: floatSoft 6s ease-in-out infinite
        }

        @keyframes floatSoft {
            0% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-12px)
            }

            100% {
                transform: translateY(0)
            }
        }

        #portfolioGrid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px
        }

        .portfolio-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .portfolio-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(77, 166, 255, .15), transparent);
            opacity: 0;
            transition: .35s;
            pointer-events: none;
        }

        .portfolio-card:hover::after {
            opacity: 1
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .18)
        }

        .portfolio-card img {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            transition: transform .5s ease, filter .3s ease;
        }


        .portfolio-card:hover img {
            transform: scale(1.08);
            filter: brightness(.85)
        }

        .btn-hover-scale {
            transition: .25s
        }

        .btn-hover-scale:hover {
            transform: scale(1.08)
        }


        .main-footer {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            color: #ffffff;
            padding-top: 60px;
        }

        .footer-col-title {
            color: #ffffff;
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 20px;
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

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: none;
            background: var(--accent);
            color: #fff;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .25);
            transition: .3s;
            z-index: 999
        }

        #scrollToTopBtn:hover {
            background: #3c95e0;
            transform: translateY(-3px)
        }

        .btn-wa {
            background: #0d6efd;
            color: #fff !important;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-wa:hover {
            background: #0b5ed7;
            transform: translateY(-1px);
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero"><img src="/assets/img/logo-ws.png" id="navbarLogo"></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="/#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">Kontak</a></li>
                    <a class="btn btn-wa ms-lg-2 px-3 py-2"
                        href="https://wa.me/6282231316699?text=Halo%20Arre%20Technology,%20saya%20ingin%20konsultasi"
                        target="_blank"
                        rel="noopener">
                        <i class="fab fa-whatsapp me-1"></i> Hubungi Kami
                    </a>
                </ul>
            </div>
        </div>
    </nav>


    <section class="py-5 portfolio-section" id="portfolio">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 text-md-start text-center animate__animated animate__fadeInLeft">
                    <h2 class="mb-3">Portofolio</h2>
                    <p class="text-muted">Kumpulan proyek terbaik yang kami kerjakan untuk klien dari berbagai industri.</p>
                    <div class="section-line mx-md-0 mx-auto"></div>
                </div>
                <div class="col-md-6 text-center animate__animated animate__fadeInRight">
                    <img src="/assets/img/Portfolio-rafiki.png" class="img-fluid portfolio-hero-img">
                </div>
            </div>

            <div id="portfolioGrid">
                @forelse($items as $item)
                @php $gambar=json_decode($item->gambar,true)??['default.jpg']; @endphp
                <div class="portfolio-item">
                    <div class="card portfolio-card border-0 shadow-sm">
                        <img src="{{ asset('uploads/'.$gambar[0]) }}" alt="{{ $item->nama }}">
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="fw-semibold">{{ $item->nama }}</h5>
                            <p class="text-muted small">{{ \Illuminate\Support\Str::limit($item->deskripsi,80) }}</p>
                            <div class="mt-auto d-flex justify-content-center gap-2">
                                <button class="btn btn-sm btn-outline-primary btn-hover-scale" onclick="window.open('{{ $item->link }}','_blank')">Preview</button>
                                <a href="{{ route('detail',$item->id) }}" class="btn btn-sm btn-outline-primary btn-hover-scale">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">Belum ada portfolio.</p>
                @endforelse
            </div>
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
                    <div class="d-flex mt-3 flex-nowrap gap-2"> <a href="#" class="social-icon-circle"><i class="fab fa-twitter"></i></a> <a href="#" class="social-icon-circle"><i class="fab fa-facebook-f"></i></a> <a href="#" class="social-icon-circle"><i class="fab fa-instagram"></i></a> <a href="#" class="social-icon-circle"><i class="fab fa-skype"></i></a> <a href="#" class="social-icon-circle"><i class="fab fa-linkedin-in"></i></a> </div>
                </div>
            </div>
        </div>
        <div class="copyright py-3 mt-4">
            <div class="container small"> © Copyright <strong>Arre Technology</strong>. All Rights Reserved </div>
        </div>
    </footer>

    <button id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const btn = document.getElementById('scrollToTopBtn');
        window.addEventListener('scroll', () => btn.style.display = window.scrollY > 200 ? 'flex' : 'none');
        btn.onclick = () => window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(e.target)
                }
            })
        }, {
            threshold: .2
        });
        document.querySelectorAll('.portfolio-item').forEach(i => observer.observe(i));
    </script>
</body>

</html>