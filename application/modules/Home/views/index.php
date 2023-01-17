<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap-dark.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/all.min.css') ?>">
    <title>d Quran</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Surah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Juz</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
                <div class="btn-group ms-auto" role="group">
                    <!-- <a id="darkmode-button" class="btn btn-outline-secondary"><i class="fa-regular fa-moon fa-fw d-none d-light-inline" title="Switch to dark mode"></i><i class="fa-regular fa-sun fa-fw d-none d-dark-inline" title="Switch to light mode"></i></a> -->
                    <a id="darkmode-button" class="btn btn-outline-secondary"><i class="fa-regular fa-moon fa-fw d-none d-light-inline" title="Switch to dark mode"></i><i class="fa-regular fa-sun fa-fw d-none d-dark-inline" title="Switch to light mode"></i></a>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="btnGroupDrop1">
                            <li><a id="darkmode-off-button" class="dropdown-item" style="cursor: pointer;">Set Light Mode</a></li>
                            <li><a id="darkmode-on-button" class="dropdown-item" style="cursor: pointer;">Set Dark Mode</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a id="darkmode-off-button-no-save" class="dropdown-item" style="cursor: pointer;">Set Light Mode (no save)</a></li>
                            <li><a id="darkmode-on-button-no-save" class="dropdown-item" style="cursor: pointer;">Set Dark Mode (no save)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a id="darkmode-forget" class="dropdown-item" style="cursor: pointer;">Reset Mode</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e; position: fixed; bottom:0; width:100%;">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">
                            d Quran
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                        <p>
                            <a class="text-white text-decoration-none" href="#">Home</a>
                        </p>
                        <p>
                            <a class="text-white text-decoration-none" href="#">Surah</a>
                        </p>
                        <p>
                            <a class="text-white text-decoration-none" href="#">Juz</a>
                        </p>
                        <p>
                            <a class="text-white text-decoration-none" href="#">About</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Useful links
                        </h6>
                        <p>
                            <a class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a class="text-white">Help</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i><a href="#" class="text-decoration-none text-white"> Semarang, Indonesia</a></p>
                        <p><i class="fas fa-envelope mr-3"></i><a href="mailto:dwi.aryaramadhni@gmail.com" class="text-decoration-none text-white"> dwi.aryaramadhni@gmail.com</a></p>
                    </div>
                </div>
            </section>

            <hr class="my-3">
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <div class="p-3">
                            © 2023 Developed with <i class="text-danger fa-solid fa-heart fa-beat"
                            style="--fa-animation-duration: 2s;"></i> by
                            <a class="text-white text-decoration-none" href="#">dwaryarr</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank" href="https://github.com/dwaryarr"><i class="fab fa-github text-white"></i></a>
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank" href="https://www.instagram.com/aryaramdhni_/"><i class="fab fa-instagram text-white"></i></a>
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank" href="https://www.facebook.com/aryaramdhni"><i class="fab fa-facebook-f text-white"></i></a>
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank" href="https://twitter.com/aryaramdhni_"><i class="fab fa-twitter text-white"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("#darkmode-button").onclick = function(e) {
            darkmode.toggleDarkMode();
        }
        document.querySelector("#darkmode-off-button").onclick = function(e) {
            darkmode.setDarkMode(false); // save=true is default
        }
        document.querySelector("#darkmode-on-button").onclick = function(e) {
            darkmode.setDarkMode(true); // save=true is default
        }
        document.querySelector("#darkmode-off-button-no-save").onclick = function(e) {
            darkmode.setDarkMode(false, false);
        }
        document.querySelector("#darkmode-on-button-no-save").onclick = function(e) {
            darkmode.setDarkMode(true, false);
        }
        document.querySelector("#darkmode-forget").onclick = function(e) {
            darkmode.resetDarkMode();
        }
    });
</script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap-dark.min.js') ?>"></script>

</html>
