<?php include 'includes/header.php'; ?>

<main class="py-5 mt-5">
    <div class="container">
        <div class="text-center mb-4 d-block d-lg-none">
            <h1 class="fw-bold">¿Hablamos de <span class="text-lila">tu equipo?</span></h1>
            <p class="lead text-description-contact">
                Ya sea para una reparación o un mantenimiento preventivo, estoy aquí para ayudarte.
            </p>
        </div>

        <div class="row g-5 align-items-center">

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="card p-4 p-md-5 border-0 shadow-lg rounded-4 form-contact-card">
                    <h3 class="mb-4 fw-bold text-emphasis-contact">Envíanos un mensaje</h3>
                    <form id="mainContactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-emphasis-contact">Nombre completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Tu Nombre y Apellido" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-emphasis-contact">Teléfono / WhatsApp</label>
                                <input type="text"
                                    name="telefono"
                                    class="form-control"
                                    placeholder="098x xxx xxx"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-emphasis-contact">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-emphasis-contact">¿Cómo puedo ayudarte?</label>
                                <textarea name="mensaje" class="form-control" rows="5" placeholder="Cuéntame qué problema tiene tu equipo o qué servicio necesitas..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-lila w-100 py-3">
                                    <i class="fas fa-paper-plane me-2"></i> ENVIAR SOLICITUD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 order-2 order-lg-1">
                <h1 class="display-5 fw-bold mb-4 d-none d-lg-block">¿Hablamos de <span class="text-lila">tu equipo?</span></h1>
                <p class="lead mb-5 text-description-contact d-none d-lg-block">
                    Ya sea para una reparación, mantenimiento preventivo o cualquier <span> <a href="/servicios.php" class="text-decoration-none">servicio informático</a></span>, estoy aquí para ayudarte.
                </p>

                <div class="contact-details-wrapper">
                    <a href="https://wa.me/595984608269" target="_blank" class="text-decoration-none">
                        <div class="d-flex align-items-center mb-4 p-3 rounded-4 contact-card-info card-whatsapp">
                            <div class="icon-only-contact me-3">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-emphasis-contact">WhatsApp</h6>
                                <p class="mb-0 text-description-contact opacity-75">+595 984 608 269</p>
                            </div>
                        </div>
                    </a>

                    <a href="https://maps.app.goo.gl/jnexXMAipmMrrq2i9" target="_blank" class="text-decoration-none">
                        <div class="d-flex align-items-center mb-4 p-3 rounded-4 contact-card-info card-ubicacion">
                            <div class="icon-only-contact me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-emphasis-contact">Ubicación del Taller</h6>
                                <p class="mb-0 text-description-contact opacity-75">Silvio Pettirossi c/ Constitución, Asunción</p>
                                <small class="text-description-contact">Agendamiento previo obligatorio</small>
                            </div>
                        </div>
                    </a>

                    <div class="mt-5">
                        <p class="text-emphasis-contact fw-bold mb-3 text-center text-lg-start">Sígueme en redes para ver mis trabajos</p>
                        <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                            <a href="https://www.instagram.com/me_techpy?igsh=MW1wZ2picW9xOHFmZg==" target="_blank" class="social-contact-link ig-color">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61587238919359" target="_blank" class="social-contact-link fb-color">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>