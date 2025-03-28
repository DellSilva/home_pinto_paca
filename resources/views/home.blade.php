<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="language" content="Portuguese">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <title>EMTCMJ Pinto Paca</title>

        <link rel="icon" href="{{ url('favicon.ico') }}">

		<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('css/grid.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css') }}" />


		<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ url('js/popper.min.js') }}"></script>
		<script src="{{ url('js/bootstrap.min.js') }}"></script>
		<script src="{{ url('js/jquery.mask.min.js') }}"></script>
		<script src="{{ url('js/jquery.validate.min.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/pt-br.min.js" integrity="sha512-1IpxmBdyZx3okPiZ14mzw6+pOGa690uDmcdjqvT310Kwv3NRcjvL/aOtoSprEyvkDdAb7ZtM2um6KrLqLOY97w==" crossorigin="anonymous"></script>


		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            :root {
                --primary-color: #1a237e;
                --secondary-color: #0d47a1;
                --accent-color: #ffd700;
            }

            body {
                font-family: 'Roboto', sans-serif;
                line-height: 1.6;
                color: #333;
            }

            .navbar {
                background-color: var(--primary-color);
                padding: 1rem 0;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            .navbar-brand img {
                transition: transform 0.3s ease;
            }

            .navbar-brand img:hover {
                transform: scale(1.05);
            }

            .nav-link {
                color: white !important;
                font-weight: 500;
                transition: color 0.3s ease;
            }

            .nav-link:hover {
                color: var(--accent-color) !important;
            }

            .hero-section {
                background: linear-gradient(rgba(26, 35, 126, 0.9), rgba(13, 71, 161, 0.9)), url('/img/pinto_paca.png');
                background-size: cover;
                background-position: center;
                color: white;
                padding: 4rem 0;
                text-align: center;
            }

            .hero-title {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 1rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
                margin-bottom: 2rem;
            }

            .content-section {
                padding: 4rem 0;
            }

            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
            }

            .carousel-item img {
                border-radius: 10px;
                object-fit: cover;
                height: 400px;
            }

            .footer {
                background-color: var(--primary-color);
                color: white;
                padding: 2rem 0;
                text-align: center;
            }

            .social-links {
                margin: 1rem 0;
            }

            .social-links a {
                color: white;
                margin: 0 10px;
                font-size: 1.5rem;
                transition: color 0.3s ease;
            }

            .social-links a:hover {
                color: var(--accent-color);
            }

            .navbar-toggler {
                border-color: rgba(255,255,255,0.5);
            }
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ url('/img/logo.png') }}" alt="EMTCMJ Pinto Paca" height="75">
                </a>
                <a class="nav-link d-lg-none" href="/login" style="color: white !important;">Área Restrita</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.pm.ba.gov.br/" target="_blank">PMBA</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Área Restrita</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">Escola Ten Cel Manoel Joaquim Pinto Paca</h1>
                <p class="hero-subtitle">Educação de qualidade para um futuro melhor</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Calendário Letivo 2025</h3>
                                <img src="/img/calendario_2025.jpeg" class="img-fluid rounded" alt="Calendário 2025">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Instagram</h3>
                                <iframe id="frame" width="100%" height="90%" src="https://www.instagram.com/p/C-3EDH-PXtv/embed" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Nossa Localização</h3>
                                <div class="map-container" style="position: relative; padding-bottom: 40%; height: 0; overflow: hidden;">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0059660888087!2d-40.86838300704728!3d-14.87191489445233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7463c0c0c0c0c0c0%3A0x0!2sEscola%20Municipal%20Ten%20Cel%20Manoel%20Joaquim%20Pinto%20Paca!5e0!3m2!1spt-BR!2sbr!4v1709912345678!5m2!1spt-BR!2sbr"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; border-radius: 10px;"
                                        allowfullscreen=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <p class="mb-0">Escola Municipal Ten Cel Manoel Joaquim Pinto Paca &copy; 2024</p>
            </div>
        </footer>

        <script>

        </script>
   </body>
</html>
