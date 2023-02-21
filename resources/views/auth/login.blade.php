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
    <link href="{{asset('lp/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body style="height: 100%;">
    <!-- Mashead header-->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" data-aos="fade-down">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="{{url('/')}}">Ngundangin Online</a>
        </div>
    </nav>
    <!-- App badge section-->
        <section class="bg-white" id="download">
            <div class="container col-md-5 px-5 mt-5">
                @if ($message = Session::get('success'))
                    <div class="alert alert-solid alert-primary d-flex align-items-center mg-b-0" role="alert">
                    <i data-feather="alert-circle" class="mg-r-10"></i> {{$message}}
                    </div><br>
                @endif
                <h2 class="text-center text-black font-alt mb-4" data-aos="fade-in">Login</h2>
                <form method="POST" action="{{ url('/akun/login/auth') }}">
                    @csrf
                    <!-- Email address input-->
                    <div class="form-floating mb-3" data-aos="flip-down">
                        <input class="form-control border-primary" name="email" type="email" placeholder="name@example.com"
                            data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <!-- Name input-->
                    <div class="form-floating mb-3" data-aos="flip-down">
                        <input class="form-control border-primary" name="password" type="password"
                            placeholder="Enter your password" data-sb-validations="required" />
                        <label for="name">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid" data-aos="flip-down">
                        <button class="btn btn-primary rounded-pill btn-lg"id="submitButton" type="submit">Login</button>
                    </div>
                </form>
                <p class="text-center text-black font-alt mt-4 mb-4" data-aos="fade-in">Belum punya akun? <a href="{{url('/akun/daftar/index')}}">Daftar sekarang.</a></p>
            </div>
        </section>
        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5" data-aos="fade-in">
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
                    <a href="https://www.narative.cf/"><img class="app-badge" src="{{asset('assets/images/narative.png')}}" alt="Logo Narative" /></a>
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
    <script src="{{asset('lp/js/scripts.js')}}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1500,
        once: true,
      });
    </script>
</body>

</html>
