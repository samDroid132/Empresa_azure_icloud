<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iLarriTech | Informática & Soporte Cloud</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: white; padding: 80px 0; }
        .card-custom { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .card-custom:hover { transform: translateY(-5px); }
        .accordion-button:not(.collapsed) { background-color: #e7f1ff; color: #0d6efd; }
    </style>
</head>
<body>

    <!-- Navegación Principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-3" href="index.php">
                <i class="bi bi-cpu-fill text-white"></i> iLarri<span class="text-white">Tech</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio & Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#faq">Preguntas Frecuentes (FAQ)</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary fw-bold px-3" href="helpdesk.php">
                            <i class="bi bi-headset"></i> Portal HelpDesk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>