<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ngundangin - Narative</title>
    <link rel="icon" type="image/x-icon" href="lp/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="lp/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="{{url('/')}}">Ngundangin Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                </ul>
                <a href="{{url('/akun/login')}}"> <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <span class="small">Login</span>
                    </span>
                </button></a>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <div class="device-wrapper">
                            <img style="max-width: 100%; height: 100%"src="lp/assets/img/sad.svg"alt="404 Not Found"></img>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Duh, link yang kamu masukan salah nih.</h1>
                        <p class="lead fw-normal text-muted mb-5">404 - Halaman tidak ditemukan!</p>
                        <div class="flex-column flex-lg-row align-items-center">
                            <button class="btn btn-primary rounded-pill px-3 mb-2" data-bs-toggle="modal"
                                data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center">
                                    <span class="small">Buat Undangan</span>
                                </span>
                            </button></a>
                            <a href="{{url('/demo')}}"> <button class="btn btn-primary rounded-pill px-3 mb-2">
                                <span class="d-flex align-items-center">
                                    <span class="small">Lihat Demo</span>
                                </span>
                            </button></a>
                            <a href="{{url('/')}}"> <button class="btn btn-primary rounded-pill px-3 mb-2">
                                <span class="d-flex align-items-center">
                                    <span class="small">Kembali kehalaman utama</span>
                                </span>
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Support Us!</h2>
            <p class="text-center text-white mb-1">Kami melayani jasa Fotografi, Videografi, dan Web Development.</p>
            <p class="text-center text-white font-alt mb-1">Contact :</p>
            <p class="text-center mb-1"><a class="text-white" href="tel:085156563645">0851-5656-3645</a><br><a
                    class="text-center text-white mb-1"
                    href="mailto:narativegroup@email.com">Narativegroup@gmail.com</a></p>
            <p class="text-center text-white mt-4">Follow instagram <a class="text-white"
                    href="https://www.instagram.com/narative.id/">Narative.id</a> or visit our website <a
                    class="text-white" href="https://www.narative.cf/">Narative.cf</a><br><br>Powered by:</p>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a href="https://www.narative.cf/"><img class="app-badge" src="assets/images/narative.png"
                        alt="Logo Narative" /></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Ngundangin Online 2023. All Rights Reserved.
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="lp/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
