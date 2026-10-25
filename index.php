<?php include('header.php'); ?>

<!-- Sección Hero / Portada -->
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Soluciones Informáticas & Soporte Cloud 24/7</h1>
        <p class="lead mb-4">En <strong>iLarriTech</strong> ofrecemos servicios de consultoría IT, venta de equipos informáticos y gestión proactiva de incidencias para empresas y particulares.</p>
        <a href="helpdesk.php" class="btn btn-light btn-lg fw-bold text-primary shadow-sm">Abrir un Ticket de Incidencia</a>
    </div>
</div>

<!-- Servicios & Tienda Informática -->
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Nuestros Servicios Informáticos</h2>
        <p class="text-muted">Especialistas en equipamiento tecnológico y gestión de incidencias IT</p>
    </div>

    <div class="row g-4">
        <!-- Servicio 1 -->
        <div class="col-md-4">
            <div class="card card-custom p-4 h-100 text-center">
                <div class="display-5 text-primary mb-3"><i class="bi bi-laptop"></i></div>
                <h4 class="fw-bold">Tienda & Equipamiento</h4>
                <p class="text-muted">Venta y configuración de hardware, ordenadores a medida, servidores y componentes de alta gama.</p>
            </div>
        </div>
        <!-- Servicio 2 -->
        <div class="col-md-4">
            <div class="card card-custom p-4 h-100 text-center">
                <div class="display-5 text-primary mb-3"><i class="bi bi-shield-check"></i></div>
                <h4 class="fw-bold">Consultoría IT</h4>
                <p class="text-muted">Auditorías de red, ciberseguridad, optimización de sistemas y migración de infraestructuras a la nube.</p>
            </div>
        </div>
        <!-- Servicio 3 -->
        <div class="col-md-4">
            <div class="card card-custom p-4 h-100 text-center">
                <div class="display-5 text-primary mb-3"><i class="bi bi-tools"></i></div>
                <h4 class="fw-bold">Soporte Técnico Cloud</h4>
                <p class="text-muted">Atención personalizada mediante HelpDesk con seguimiento detallado de averías y capturas de pantalla.</p>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Preguntas Frecuentes (FAQ) -->
<div class="bg-white py-5" id="faq">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark"><i class="bi bi-question-circle text-primary"></i> Preguntas Frecuentes (FAQ)</h2>
            <p class="text-muted">Resuelve tus dudas rápidas antes de abrir un ticket de soporte</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="accordion shadow-sm" id="accordionFAQ">
                    
                    <!-- Duda 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Cuánto tarda en procesarse un ticket de soporte?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                En <strong>iLarriTech</strong> atendemos los tickets en un plazo máximo de 2 a 4 horas laborables. Si la incidencia es crítica (caída de red o servidor), se asigna prioridad alta inmediata.
                            </div>
                        </div>
                    </div>

                    <!-- Duda 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Qué tipo de archivos puedo adjuntar al abrir un ticket?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Puedes adjuntar capturas de pantalla o fotos del error en formatos <strong>JPG, PNG o GIF</strong>. Esto ayuda a nuestros técnicos a diagnosticar la avería con mayor rapidez.
                            </div>
                        </div>
                    </div>

                    <!-- Duda 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Ofrecen presupuesto gratuito para la compra de equipos informáticos?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                ¡Sí! En nuestra división de tienda informática asesoramos a empresas y particulares sin compromiso para preparar presupuestos de hardware ajustados a sus necesidades.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2026 iLarriTech Cloud Services. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>