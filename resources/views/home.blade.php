<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="assets/app.js" defer></script>
    <title>Profesi</title>
</head>

<body>
    <header class="main-header position-fixed w-100">
        <div class="container">
            <nav class="navbar navbar-expand-xl py-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" aria-current="page" href="#gaji">Profesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#contact">Hubungi Saya</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="fa-solid fa-xmark text-warning"></i></button>
            </div>
            <div class="offcanvas-body pt-0">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#gaji">Profesi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#contact">Hubungi Saya</a>
                    </li>
                </ul>
                <div class="login d-block align-items-center mt-3">
                    <a class="btn btn-warning text-capitalize w-100" href="#">contact us</a>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-banner position-relative overflow-hidden">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h1 class="mb-0 fw-bold">Temukan Berbagai Profesi Menarik</h1>
                        <p>Lengkap Dengan Minimal Gaji Bulanan</p>
                        <a href="#gaji" class="btn btn-warning btn-hover-secondery">Read More</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="https://cdn.dribbble.com/userupload/2841473/file/original-45930af3ecb45828382d5f9ca0497257.jpg?compress=1&resize=752x"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gaji" class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12"><small class="fs-7 d-block">Profesi</small></div>
                <div
                    class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center">
                    <h2 class="fs-2 text-black mb-0">
                        Profesi Dengan Gaji<br />
                        Yang Tinggi
                    </h2>
                    <a href="https://www.google.com/search?q=profesi+dengan+gaji+tertinggi" target="_block" class="btn btn-warning btn-hover-secondery section-btn">Lebih Banyak</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
                @if ($profesi->isNotEmpty())
                    @foreach ($profesi as $item)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center mb-5">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <img src="{{ asset($item->foto) }}" alt="coba" width="100%"
                                        style="max-height: 250px;">
                                    <h5 class="mb-0 fw-500">{{ $item->nama_profesi }}</h5>
                                    <h3 class="fs-7">Dengan Minimal Gaji</h3>
                                    <p class="fs-7 mb-0 fw-500">Rp. {{ $item->minimal_gaji_bulanan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-center">Data Kosong</h3>
                @endif
            </div>
        </div>
    </section>
    <section id="contact" class="contact bg-primary position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <small class="fs-7 d-block text-warning">Hubungi Saya</small>
                    <h2 class="fs-3 text-white mb-0">Anda Mengetahui Profesi Dengan Gaji Tinggi?</h2>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <form class="position-relative">
                        <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Full Name</label>
                                    <input type="text" class="form-control border-0"
                                        placeholder="Enter your name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Email address</label>
                                    <input type="email" class="form-control border-0"
                                        placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Note</label>
                                    <textarea class="form-control border-0" cols="30" rows="10" placeholder="Enter your note"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn btn-warning btn-hover-secondery text-capitalize mt-2 w-auto contact-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <a href="#"><img src="./assets/gambar/awi.jpeg" /></a>
                        <p class="blue-light mb-0 fs-7 fw-500">A simple website build using Bootstrap 5.
                        </p>
                        <div class="callus text-white fw-500 fs-7">
                            Awi Maulana
                            <div class="blue-light">Call me: <a href="#"
                                    class="text-warning fw-500 fs-7 text-decoration-none">082397032649</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Social</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Github</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">My University</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Universitas</a></li>
                        <li><a href="#">Fakultas</a></li>
                        <li><a href="#">Jurusan</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="subscribe">
                        <h5 class="text-white">Email Saya</h5>
                        <p class="blue-light fw-500">Tulis Email Anda</p>
                        <div class="input-group">
                            <input type="email" class="form-control br-15" placeholder="Tulis Email"
                                aria-label="Tulis Email" aria-describedby="button-addon2" />
                            <button
                                class="btn btn-warning btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0"
                                type="button" id="button-addon2">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center blue-light fw-500">
                All Rights Reserved by <a href="https://vishalzen.netlify.app/"
                    class="blue-light text-decoration-none">Awi Maulana</a> - &copy; Copyright <span
                    id="autodate">2023</span>
            </div>
        </div>
    </footer>
</body>

</html>
