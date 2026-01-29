<?php include 'includes/header.php'; ?>

<header id="heroCarousel" class="carousel slide carousel-fade hero" data-bs-ride="carousel">
    <div class="carousel-inner h-100">
        <div class="carousel-item active h-100">
            <div class="hero-slide-container" style="background-image: url('assets/img/header/hero.jpg')">;
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 hero-content">
                            <h1 class="display-4 fw-bold mb-4 text-white">Reparación y Mantenimiento <span class="text-lila">Profesional</span></h1>
                            <p class="lead mb-5 text-white-50">Especialistas en Hardware y micro-soldadura. Soporte técnico rápido para hogares y empresas con garantía escrita.</p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#" class="btn-lila" data-bs-toggle="modal" data-bs-target="#modalSoporte">
                                    <i class="fas fa-headset me-2"></i> SOPORTE TÉCNICO
                                </a>
                                <a href="/servicios.php" class="btn btn-outline-light btn-lg rounded-pill">Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item h-100">
            <div class="hero-slide-container" style="background-image: url('assets/img/header/remoto.jpg');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 hero-content">
                            <h1 class="display-4 fw-bold mb-4 text-white">Asistencia Técnica <span class="text-lila">Remota e Inmediata</span></h1>
                            <p class="lead mb-5 text-white-50">Solucionamos tus problemas de software sin que salgas de casa. Configuración de sistemas, limpieza de virus y soporte especializado desde cualquier lugar.</p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#" class="btn-lila"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalSoporte"
                                    onclick="showForm('Remoto')">
                                    <i class="fas fa-house me-2"></i> SOLICITAR ASISTENCIA REMOTA
                                </a>
                                <a href="/servicios.php" class="btn btn-outline-light btn-lg rounded-pill">Ver más servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-custom">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-custom">
                <i class="fas fa-chevron-right"></i>
            </span>
            <span class="visually-hidden">Siguiente</span>
        </button>
</header>

<div class="modal fade" id="modalSoporte" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-custom border-lila">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold text-white" id="modalTitle">¿Qué tipo de soporte necesitas?</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div id="step1">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card bg-opcion-dark border-secondary h-100 text-center p-3 option-card" onclick="showForm('Físico / Taller')">
                                <div class="icon-circle mb-3"><i class="fas fa-tools fa-2x text-lila"></i></div>
                                <h6 class="fw-bold text-white">Físico / Taller</h6>
                                <small class="text-light-50">Reparación o mantenimiento en taller</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-opcion-dark border-secondary h-100 text-center p-3 option-card" onclick="showForm('Remoto')">
                                <div class="icon-circle mb-3"><i class="fas fa-laptop-house fa-2x text-success"></i></div>
                                <h6 class="fw-bold text-white">Remoto</h6>
                                <small class="text-light-50">Solución online vía AnyDesk</small>
                            </div>
                        </div>
                    </div>
                </div>

                <form id="soporteForm" class="d-none p-2">
                    <input type="hidden" id="tipoSeleccionado" name="tipo">

                    <div class="mb-3 text-start">
                        <label for="nombre" class="form-label text-white-50 small">Nombre Completo</label>
                        <input type="text" class="form-control form-control-dark" id="nombre" required placeholder="Tu Nombre y Apellido">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3 text-start">
                            <label for="telefono" class="form-label text-white-50 small">Teléfono</label>
                            <input type="tel" class="form-control form-control-dark" id="telefono" required placeholder="09xx xxx xxx">
                        </div>
                        <div class="col-md-6 mb-3 text-start">
                            <label for="email" class="form-label text-white-50 small">Email (Opcional)</label>
                            <input type="email" class="form-control form-control-dark" id="email" placeholder="correo@ejemplo.com">
                        </div>
                    </div>

                    <div class="mb-4 text-start">
                        <label for="problema" class="form-label text-white-50 small">Descripción del Problema</label>
                        <textarea class="form-control form-control-dark" id="problema" rows="3" required placeholder="Describe qué le sucede a tu equipo..."></textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="button" class="btn-lila w-40" onclick="hideForm()">
                            <i class="fas fa-arrow-left me-2"></i>Volver
                        </button>
                        <button type="submit" class="btn-whatsapp-grad w-50">
                            Registrar Solicitud <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </div>
                    <div class="mb-5">
                        <div id="info-anydesk" class="mt-3 mb-4 d-none">
                            <div class="p-4 rounded-3 border-4 border-lila bg-lila-subtle shadow-sm">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-desktop text-lila me-2 fs-5"></i>
                                    <h6 class="mb-0 fw-bold text-emphasis">¿Qué es el Soporte Remoto?</h6>
                                </div>
                                <p class="mb-0 text-description">
                                    Utilizamos <strong>AnyDesk</strong>, una herramienta segura que me permite ayudarte a través de internet.
                                    Es como si estuviera ahí contigo: puedo ver tu pantalla y configurar tu equipo a distancia.
                                </p>
                                <hr class="my-2 opacity-25" style="border-color: var(--bs-body-color);">
                                <small class="d-block fw-medium text-emphasis">
                                    <i class="fas fa-shield-alt text-success me-1"></i>
                                    Tú autorizas siempre la conexión y puedes ver todo lo que hago en tiempo real.
                                    <a href="https://anydesk.com/es/downloads" target="_blank" rel="noopener noreferrer" class=" mt-3 btn-lila">
                                        <i class="fas fa-external-link-alt me-2"></i> Ir a la descarga oficial de AnyDesk
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <h6 class="text-lila fw-bold text-uppercase">¿Tu equipo no funciona como antes?</h6>
            <h2 class="display-6 fw-bold">Soluciones comunes para problemas frecuentes</h2>
            <p class="text-muted">Si identificas alguno de estos síntomas, es momento de un chequeo técnico.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <a href="https://wa.me/595984608269?text=Hola!%20Quisiera%20consultar%20acerca%20de%20los%20servicios%20porque%20mi%20computadora%20está%20muy%20lenta."
                    class="text-decoration-none h-100 d-block">
                    <div class="card h-100 border-0 shadow-sm p-4 card-problema">
                        <div class="icon-circle-lila mb-3">
                            <i class="fas fa-bolt-lightning"></i>
                        </div>
                        <h5 class="fw-bold card-title-serv">¿Está muy lenta?</h5>
                        <p class="small text-muted mb-0">Tarda en encender, los programas se cuelgan o el sistema se siente pesado. Realizamos optimización de software y upgrades de hardware.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://wa.me/595984608269?text=Hola!%20Mi%20equipo%20calienta%20demasiado%20y%20hace%20ruido,%20quisiera%20agendar%20una%20limpieza%20técnica."
                    class="text-decoration-none h-100 d-block">
                    <div class="card h-100 border-0 shadow-sm p-4 card-problema">
                        <div class="icon-circle-lila mb-3">
                            <i class="fas fa-thermometer-half"></i>
                        </div>
                        <h5 class="fw-bold card-title-serv">¿Calienta demasiado?</h5>
                        <p class="small text-muted mb-0">Si el ventilador hace ruido y/o se siente muy caliente, tu equipo corre peligro. Una limpieza técnica a tiempo evita que se queme el procesador.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://wa.me/595984608269?text=Hola!%20Mi%20computadora%20tiene%20problemas%20de%20encendido,%20quisiera%20un%20diagnóstico%20electrónico."
                    class="text-decoration-none h-100 d-block">
                    <div class="card h-100 border-0 shadow-sm p-4 card-problema">
                        <div class="icon-circle-lila mb-3">
                            <i class="fas fa-plug-circle-xmark"></i>
                        </div>
                        <h5 class="fw-bold card-title-serv">¿No enciende o se apaga?</h5>
                        <p class="small text-muted mb-0">Problemas de batería, cargadores o fallas en la placa madre. Diagnóstico electrónico preciso para volver a darle vida a tu inversión.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="sobre-nosotros" class="py-5" style="background-color: #fcfcfc;">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="position-relative">
                    <img src="assets/img/nosotros/compromiso.png"
                        alt="Taller de Hardware"
                        class="img-fluid rounded-4 shadow-lg border-lila">
                    <div class="bg-azul-marino p-3 rounded-3 text-white position-absolute bottom-0 end-0 m-3 shadow">
                        <p class="mb-0 small fw-bold"><i class="fas fa-check-circle text-success me-2"></i>Atención 1 a 1</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <h6 class="text-lila fw-bold text-uppercase mb-3">Nuestro Compromiso</h6>
                <h2 class="display-6 fw-bold mb-4">Soluciones Reales de Hardware sin Intermediarios</h2>
                <p class="lead text-muted mb-4">
                    En <strong>ME Servicios Informáticos</strong> nos especializamos en la reparación y optimización de hardware, priorizando siempre la solución más eficiente antes que el reemplazo innecesario. Ofrecemos un servicio técnico basado en la honestidad, la precisión y la calidad, desde limpiezas técnicas profundas hasta reparaciones de alta complejidad.</p>
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-small"><i class="fas fa-search-dollar text-lila"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Presupuesto Justo</h6>
                                <p class="small text-muted">Diagnósticos honestos. Solo pagas por la solución que tu equipo realmente necesita.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-small"><i class="fas fa-user-shield text-lila"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Trato Directo</h6>
                                <p class="small text-muted">Sin recepcionistas. Hablas directamente con la persona que desarma y repara tu equipo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-small"><i class="fas fa-tools text-lila"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Repuestos de Calidad</h6>
                                <p class="small text-muted">Utilizo componentes certificados para asegurar que la reparación sea duradera.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-small"><i class="fas fa-history text-lila"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Garantía</h6>
                                <p class="small text-muted">Cada trabajo incluye un periodo de garantía escrita para tu total tranquilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="proceso" class="py-5 bg-azul-marino text-white">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h6 class="text-lila fw-bold text-uppercase">Metodología</h6>
            <h2 class="display-6 fw-bold text-white">¿Cómo trabajamos?</h2>
            <p class="text-white-50">Transparencia y orden desde el primer contacto hasta la entrega.</p>
        </div>

        <div class="row g-4 process-row">
            <div class="col-6 col-md-3">
                <div class="process-card text-center">
                    <div class="process-number">1</div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-2x text-lila"></i>
                    </div>
                    <h5 class="text-white h6 fw-bold">Recepción</h5>
                    <p class="small text-white-50">Agendamos el retiro o recepción del equipo.</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="process-card text-center">
                    <div class="process-number">2</div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-microscope fa-2x text-lila"></i>
                    </div>
                    <h5 class="text-white h6 fw-bold">Diagnóstico</h5>
                    <p class="small text-white-50">Analizamos la falla y enviamos el presupuesto.</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="process-card text-center">
                    <div class="process-number">3</div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-tools fa-2x text-lila"></i>
                    </div>
                    <h5 class="text-white h6 fw-bold">Reparación</h5>
                    <p class="small text-white-50">Procedemos con el arreglo y pruebas de estrés.</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="process-card text-center">
                    <div class="process-number">4</div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-truck-loading fa-2x text-lila"></i>
                    </div>
                    <h5 class="text-white h6 fw-bold">Entrega</h5>
                    <p class="small text-white-50">Devolvemos tu equipo con garantía escrita.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<section id="faq" class="py-5 bg-body-tertiary">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Preguntas Frecuentes</h2>
            <div style="width: 50px; height: 3px; background: var(--lila-principal); margin: 10px auto;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden" id="accordionFAQ">

                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Dónde debo llevar mi equipo o cómo es el retiro?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body text-muted">
                                Al ser un servicio especializado, coordinamos la recepción en nuestro punto de entrega o podemos gestionar el retiro a domicilio según la zona. Consultanos vía WhatsApp para agendar.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿El diagnóstico tiene algún costo?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body text-muted">
                                El diagnóstico es sin costo si se acepta el presupuesto de reparación. En caso de no aprobarlo, se cobra una tarifa mínima por el tiempo de desarme y revisión técnica.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Qué garantía tienen los trabajos?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body text-muted">
                                Todas nuestras reparaciones de hardware cuentan con una garantía escrita de 30 a 90 días (según el tipo de intervención), cubriendo cualquier falla relacionada con el trabajo realizado.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                ¿Cada cuanto debo hacer mantenimiento preventivo a mi equipo?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body text-muted">
                                Se recomienda hacer mantenimiento preventivo cada 6 meses; si el equipo se usa mucho o hay polvo, cada 3–4 meses para evitar sobrecalentamiento, fallas y alargar su vida útil.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 text-white text-center position-relative overflow-hidden" id="cta-final">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="container py-4 position-relative" style="z-index: 2;">
        <h2 class="fw-bold display-6 mb-3">¿Listo para que tu equipo vuelva a volar?</h2>
        <p class="lead mb-4 opacity-75 mx-auto" style="max-width: 700px;">
            No esperes a que una falla pequeña se convierta en una reparación costosa.
            Soporte técnico profesional en Asunción.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap mt-2">
            <a href="#" class="btn btn-light btn-lg rounded-pill px-4 fw-bold shadow" data-bs-toggle="modal" data-bs-target="#modalSoporte">
                <i class="fas fa-file-signature me-2"></i>Registrar Pedido
            </a>
            <a href="https://wa.me/595984608269" class="btn-whatsapp-grad btn-lg">
                <i class="fab fa-whatsapp me-2"></i>Consulta Rápida
            </a>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
</body>

</html>