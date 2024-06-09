<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="/assets/images/logo-ico.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/log_access/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/log_access/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/log_access/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <style>
            body {
                background-image: url('/log_access/media/auth/fondo.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('/log_access/media/auth/fondo.jpg');
            }
        </style>
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <a href="{{ route('login') }}" class="mb-7">
                        <img alt="Logo" src="/assets/images/logo.jpg" />
                    </a>
                    <h2 class="text-white fw-normal m-0">#Soluciones al instante</h2>
                </div>
            </div>
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Iniciar sesión</h1>
                            </div>
                            @error('email')
                                <label>{{ $message }}</label>
                            @enderror
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" id="email"
                                    autocomplete="off" class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-3 position-relative">
                                <input type="password" placeholder="Password" id="password" name="password"
                                    autocomplete="off" class="form-control bg-transparent" />
                                <button type="button" class="btn btn-toggle-password"
                                    onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <!-- div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="#"
                                    class="link-primary">¿Olvidaste tu contraseña?</a>
                            </div -->
                            <div class="d-grid mb-10">
                                <button type="submit" name="btningresar" id="kt_sign_in_submit"
                                    class="btn btn-primary">
                                    <span class="indicator-label">Iniciar sesión</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex flex-stack px-lg-10">
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="{{ route('index') }}" target="_blank">Inicio</a>
                            <a href="{{ route('nosotros') }}" target="_blank">Nosotros</a>
                            <a href="{{ route('contacto') }}" target="_blank">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "/log_access/";
    </script>
    <script src="/log_access/plugins/global/plugins.bundle.js"></script>
    <script src="/log_access/js/scripts.bundle.js"></script>
    <script src="/log_access/js/custom/authentication/sign-in/general.js"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var toggleButton = document.querySelector(".btn-toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                passwordField.type = "password";
                toggleButton.innerHTML = '<i class="bi bi-eye"></i>';
            }
        }
    </script>

</body>

</html>
