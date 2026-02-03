<?php include 'includes/header.php'; ?>

<header id="heroCarousel" class="carousel slide carousel-fade hero" data-bs-ride="carousel">
    <div class="carousel-inner h-100">
        <div class="carousel-item active h-100">
            <div class="hero-slide-container" style="background-image: url('assets/img/header/hero.webp')">;
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 hero-content">
                            <h1 class="display-4 fw-bold mb-4 text-white">Reparación y Mantenimiento <span class="text-lila">Profesional</span></h1>
                            <p class="lead mb-5 text-white-50">Especialistas en Hardware y Servicios Informáticos. Soporte técnico especializado para hogares y empresas con garantía real.</p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#" class="btn-lila" data-bs-toggle="modal" data-bs-target="#modalSoporte">
                                    <i class="fas fa-user-gear me-2"></i> SOLICITAR ASISTENCIA
                                </a>
                                <a href="/servicios.php" class="btn btn-outline-light btn-lg rounded-pill">Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100">
            <div class="hero-slide-container" style="background-image: url('assets/img/header/ps4.webp');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 hero-content">
                            <h1 class="display-4 fw-bold mb-4 text-white">Mantenimiento Preventivo <span class="text-lila">PlayStation 4</span></h1>
                            <p class="lead mb-5 text-white-50">¿Tu consola suena como un avión? Evita sobrecalentamiento y daños en tu equipo con limpieza profunda y cambio de pasta térmica.</p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="https://wa.me/595984608269?text=Hola! Necesito mantenimiento para mi PlayStation 4" class="btn-whatsapp-grad text-decoration-none">
                                    <i class="fab fa-whatsapp me-2"></i>CONSULTAR PRESUPUESTO
                                </a>
                                <a href="/servicios.php" class="btn btn-outline-light btn-lg rounded-pill">Ver más servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100">
            <div class="hero-slide-container" style="background-image: url('assets/img/header/remoto.webp');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 hero-content">
                            <h1 class="display-4 fw-bold mb-4 text-white">Asistencia Técnica <span class="text-lila">Remota e Inmediata</span></h1>
                            <p class="lead mb-5 text-white-50">Solucionamos tus problemas de software sin que salgas de casa. Configuración de sistemas, optimización de sistema operativo y soporte especializado desde cualquier lugar.</p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#" class="btn-lila"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalSoporte"
                                    onclick="showForm('Remoto')">
                                    <i class="fas fa-house-laptop me-2"></i> SOLICITAR ASISTENCIA REMOTA
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

<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <h6 class="text-lila fw-bold text-uppercase">¿Tu equipo no funciona como antes?</h6>
            <h2 class="display-6 fw-bold">Soluciones comunes para problemas frecuentes</h2>
            <p class="text-muted">Si identificas alguno de estos síntomas, es momento de un chequeo técnico.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <a href="https://wa.me/595984608269?text=Hola!%20Quisiera%20consultar%20acerca%20de%20los%20servicios%20porque%20mi%20equipo%20está%20muy%20lento."
                    class="text-decoration-none h-100 d-block">
                    <div class="card h-100 border-0 shadow-sm p-4 card-problema">
                        <div class="icon-circle-lila mb-3">
                            <i class="fas fa-arrow-trend-down"></i>
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
                            <i class="fas fa-temperature-high"></i>
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
                    <img src="assets/img/nosotros/compromiso.webp"
                        alt="Taller de Hardware"
                        class="img-fluid rounded-4 shadow-lg border-lila img-fit-height"
                        loading="lazy">
                    <div class="bg-azul-marino p-3 rounded-3 text-white position-absolute bottom-0 end-0 m-3 shadow">
                        <p class="mb-0 small fw-bold"><i class="fas fa-check-circle text-success me-2"></i>Atención 1 a 1</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <h6 class="text-lila fw-bold text-uppercase mb-3">Nuestro Compromiso</h6>
                <h2 class="display-6 fw-bold mb-4">Soluciones Reales de Hardware sin Intermediarios</h2>
                <p class="lead text-muted mb-4">
                    Nos especializamos en la reparación y optimización de hardware, priorizando siempre la solución más eficiente antes que el reemplazo innecesario. Ofrecemos un servicio técnico basado en la honestidad, la precisión y la calidad, desde limpiezas técnicas profundas hasta reparaciones de alta complejidad.</p>
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
                            <div class="icon-box-small"><i class="fas fa-star text-lila"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Profesionalismo</h6>
                                <p class="small text-muted">Tratamos cada dispositivo con el máximo cuidado técnico, utilizando herramientas de precisión y componentes de calidad.</p>
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
<section class="py-5 bg-body-tertiary position-relative" id="testimonios">
    <div class="container py-4">

        <div class="text-center mb-5">
            <h6 class="text-lila fw-bold text-uppercase ls-2">Opiniones Reales</h6>
            <h2 class="fw-bold display-6">Lo que dicen mis <span class="text-lila">clientes</span></h2>
            <p class="text-body-secondary mx-auto" style="max-width: 600px;">
                La confianza se gana con resultados. Aquí algunos profesionales que confían sus herramientas de trabajo en mí.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 testimonial-card p-4 bg-body">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-4 text-lila opacity-50">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <p class="card-text text-body-secondary mb-4">
                            "Mi laptop estaba lentísima y pensaba comprar una nueva. Me recomendó un cambio a SSD y ahora vuela para mis programas de edición."
                        </p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="avatar-circle bg-lila-subtle text-lila fw-bold me-3">S</div>
                            <div>
                                <h6 class="mb-0 fw-bold text-body">Sol M. Blanc</h6>
                                <small class="text-body-secondary fw-medium role-text">Licenciada en Hotelería y Turismo</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 testimonial-card p-4 bg-body">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-4 text-lila opacity-50">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <p class="card-text text-body-secondary mb-4">
                            "Excelente servicio de soporte remoto. Me solucionó un problema de configuración de la firma digital sin moverme de casa."
                        </p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="avatar-circle bg-info-subtle text-info fw-bold me-3">R</div>
                            <div>
                                <h6 class="mb-0 fw-bold text-body">Roberto Méndez</h6>
                                <small class="text-body-secondary fw-medium role-text">Contador Público</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 testimonial-card p-4 bg-body">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-4 text-lila opacity-50">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <p class="card-text text-body-secondary mb-4">
                            "Llevé mi PC para un mantenimiento general y gestión de cables. Bajaron las temperaturas y ahora rinde mucho mejor."
                        </p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="avatar-circle bg-lila-subtle text-lila fw-bold me-3">D</div>
                            <div>
                                <h6 class="mb-0 fw-bold text-body">David Torres</h6>
                                <small class="text-body-secondary fw-medium role-text">Estudiante de Arquitectura</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php include 'includes/modal-soporte.php'; ?>
<?php include 'includes/footer.php'; ?>

</body>

</html>