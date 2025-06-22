<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>Selección de Compañía - [Nombre de tu Aplicación]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Selecciona la compañía para acceder al sistema de Compra y Venta. Gestiona tus operaciones de forma eficiente." />
    <meta name="author" content="[Tu Empresa/Organización]" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <style>
        
        .company-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: 1px solid rgba(var(--bs-primary-rgb), 0.1); 
        }
        .company-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); 
            cursor: pointer; 
        }
        .company-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            min-height: 250px; 
        }
        .company-card .avatar-title {
            background-color: var(--bs-primary-rgb); 
            color: var(--bs-white);
        }
        .company-card .btn-select-company {
            margin-top: auto; 
        }
    </style>
</head>

<body>

    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/comprayventa.png" class="card-logo card-logo-dark" alt="Logo de [Nombre de tu Aplicación]" height="100">
                    <img src="assets/images/logo-light.png" class="card-logo card-logo-light" alt="Logo de [Nombre de tu Aplicación]" height="22">
                </a>
                </div>
        </nav>

        <section class="section bg-light" id="company-selection">
            <div class="bg-overlay bg-overlay-pattern"></div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold text-dark">¡Bienvenido! Selecciona tu Compañía</h3>
                            <p class="text-muted fs-16 mb-4">Para continuar, elige la empresa con la que deseas trabajar. Cada compañía ofrece un entorno específico para la gestión de tus operaciones de compra y venta.</p>
                            <p class="text-muted fs-14">Si no encuentras tu compañía o necesitas asistencia, por favor, contacta a soporte.</p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-5 col-md-6">
                        <div class="card company-card h-100" onclick="window.location.href='login.php?c=1'">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold text-primary">Compañía Principal S.A.C.</h5>
                                        <p class="text-muted mb-0">Gestión centralizada de operaciones</p>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-primary rounded-circle text-white">
                                            <i class="ri-building-line fs-20"></i>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3"> <div>
                                    <p class="text-dark fw-medium mb-2">Características destacadas:</p>
                                    <ul class="list-unstyled text-muted vstack gap-2 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    **Gestión completa de inventario**
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    **Reportes financieros avanzados**
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    **Módulo de clientes integrado**
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Soporte técnico prioritario
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Integración con terceros (limitado)
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-auto pt-3 text-center">
                                    <a href="login.php?c=1" class="btn btn-primary w-100 btn-select-company">Seleccionar Compañía Principal</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="card company-card h-100" onclick="window.location.href='login.php?c=2'">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold text-info">Subsidiaria de Ventas E.I.R.L.</h5>
                                        <p class="text-muted mb-0">Especializada en ventas y distribución</p>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-info rounded-circle text-white">
                                            <i class="ri-store-line fs-20"></i>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3"> <div>
                                    <p class="text-dark fw-medium mb-2">Características destacadas:</p>
                                    <ul class="list-unstyled text-muted vstack gap-2 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    **Optimización de procesos de venta**
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Gestión de pedidos en tiempo real
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Facturación electrónica
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Control avanzado de compras
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Reportes de contabilidad general
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-auto pt-3 text-center">
                                    <a href="login.php?c=2" class="btn btn-info w-100 btn-select-company">Seleccionar Subsidiaria de Ventas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

</body>

</html>