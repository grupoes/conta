<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from shreyu.coderthemes.com/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 19:47:58 GMT -->
<head>
        <meta charset="utf-8" />
        <title>LogIn | Grupo Es Consultores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/images/favicon.ico">

		<!-- App css -->
		<link href="<?= base_url() ?>/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url() ?>/public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url() ?>/public/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href="<?= base_url() ?>/public/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href="<?= base_url() ?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-4">
                                        <div class="mx-auto">
                                            <a href="index.html">
                                                <img src="<?= base_url() ?>/public/assets/images/grupoesconsultores.webp" alt="" height="70" />
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-3">¡Bienvenido de nuevo!</h6>
                                        <p class="text-muted mt-1 mb-4">
                                        Ingrese su usuario y contraseña para acceder al panel de administración.
                                        </p>

                                        <form action="#" class="authentication-form">
                                            <div class="mb-3">
                                                <label class="form-label">Usuario</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="icon-dual" data-feather="mail"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escriba aqui su usuario">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Contraseña</label>
                                                
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="icon-dual" data-feather="lock"></i>
                                                    </span>
                                                    <input type="password" class="form-control" id="password" placeholder="Escriba aqui su contraseña">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                </div>
                                            </div>

                                            <div class="mb-3 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Ingresar</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                <p class="fs-24 fw-bold text-white mb-1">GRUPO ES CONTABILIDAD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="<?= base_url() ?>/public/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url() ?>/public/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from shreyu.coderthemes.com/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 19:47:58 GMT -->
</html>