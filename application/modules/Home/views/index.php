<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap-dark.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/fontawesome.min.css') ?>">
    <title>Document</title>
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
                        <a class="nav-link" href="#">Link</a>
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
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <!-- ***** ***** ***** THE BUTTON GOES HERE ***** ***** ***** -->
                <div class="btn-group ms-auto" role="group">
                    <a id="darkmode-button" class="btn btn-outline-secondary"><i class="fa-regular fa-moon-stars fa-fw d-none d-light-inline" title="Switch to dark mode"></i><i class="fa-regular fa-sun fa-fw d-none d-dark-inline" title="Switch to light mode"></i></a>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a id="darkmode-off-button" class="dropdown-item">Set Light Mode</a></li>
                            <li><a id="darkmode-on-button" class="dropdown-item">Set Dark Mode</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a id="darkmode-off-button-no-save" class="dropdown-item">Set Light Mode (no save)</a></li>
                            <li><a id="darkmode-on-button-no-save" class="dropdown-item">Set Dark Mode (no save)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a id="darkmode-forget" class="dropdown-item">Reset Mode</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
<script>
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
</script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap-dark.min.js') ?>"></script>

</html>