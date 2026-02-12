document.addEventListener("DOMContentLoaded", function () {

    window.arPaginas = {
        'content': ['includes/carousel.html', 'includes/soluciones.html', 'includes/compromiso.html', 'includes/principal.html'],
        'modal-soporte': ['includes/modal-soporte.html'],
        'footer': ['includes/footer.html']
    };

    window.arHeader = {
        stateCreate: {
            "target": "header",
            "nav": [
                {
                    "class": "navbar navbar-expand-lg fixed-top",
                    "logo": "assets/img/logo/logo_me.svg",
                    "classLogo": "logo-navbar",
                    "hrefLogo": "javascript:cargarArr('content')",
                    "idBtnLugar": "navbarNav",
                    "idBotones": "header-menu"
                }
            ]
        },
        btnHeader: {
            "target": "header-menu",
            "nav-item": [
                { text: "Inicio", href: "javascript:cargarArr('content')" },
                { text: "Servicios", href: "javascript:cargar('includes/servicios.html')" },
                { text: "Nosotros", href: "javascript:cargar('includes/nosotros.html')" },
                { text: "Contacto", href: "javascript:cargar('includes/contacto.html')" }
            ],
            "button": [
                {
                    'id': "btn-theme",
                    'class': "btn border-0 text-lila fs-5 p-0 me-3",
                    'title': "Cambiar modo",
                    'action': "toggleTheme",
                    'text': "",
                    'faA': "<i id='theme-icon' class='fa-regular fa-moon'></i>",
                    'faD': "",
                    'icoA': "",
                    'icoD': ""
                }
            ]
        }
    };

    window.arFooter = {
        btnFooter: {
            "target": "footer-menu",
            "nav-item": [
                { text: "Inicio", href: "javascript:cargarArr('content')" },
                { text: "Servicios", href: "javascript:cargar('includes/servicios.html')" },
                { text: "Soporte Técnico", href: "#", "data-bs-toggle": "modal", "data-bs-target": "#modalSoporte" },
                { text: "Contacto", href: "javascript:cargar('includes/contacto.html')" }
            ]
        },
        btnFooterContact: {
            "target": "footer-contact-menu",
            "normalLI": [
                { class: "mb-3", text: "Asunción, Paraguay", 'faA': "<i class='fas fa-map-marker-alt text-lila me-3'></i>", 'faD': "" },
                { class: "mb-3", text: "+595 984 608 269", 'faA': "<i class='fas fa-phone-alt text-lila me-3'></i>", 'faD': "" },
                { class: "mb-3", text: "me_techpy@gmail.com", 'faA': "<i class='fas fa-envelope text-lila me-3'></i>", 'faD': "" }
            ]
        }
    };

    // CARGA INICIAL
    const cargarTodo = async () => {
        try {
            await Promise.all(
                Object.entries(arPaginas).map(([id, archivos]) => cargarSeccion(id, archivos))
            );
            initApp();
        } catch (err) {
            console.error('Error cargando archivos', err);
        }
    };

    cargarTodo();
});

// FUNCIONES DEL NÚCLEO (Renderizado y Lógica)
async function initApp() {

    await renderUI(window.arHeader);
    bindActions(window.arHeader);

    await renderUI(window.arFooter);
    bindActions(window.arFooter);

    // Lógica de Auto-Cierre del Menú Móvil
    const headerMenu = document.getElementById('header-menu');
    if (headerMenu) {
        headerMenu.addEventListener('click', function (e) {
            const target = e.target.closest('a');

            if (target) {
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            }
        });
    }

    // Inicialización de Carrusel
    const carouselEl = document.getElementById('heroCarousel');
    if (carouselEl) {
        const carousel = new bootstrap.Carousel(carouselEl, { interval: 4000, pause: false });
        let resumeTimeout;
        carouselEl.addEventListener('click', () => {
            carousel.pause();
            clearTimeout(resumeTimeout);
            resumeTimeout = setTimeout(() => { carousel.cycle(); }, 10000);
        });
    }

    // Lógica del Formulario de Soporte
    const form = document.getElementById('soporteForm');
    const modalElement = document.getElementById('modalSoporte');

    window.showForm = function (tipo) {
        const modalTitle = document.getElementById('modalTitle');
        const tipoInput = document.getElementById('tipoSeleccionado');
        const step1 = document.getElementById('step1');
        const soporteForm = document.getElementById('soporteForm');
        const infoRemoto = document.getElementById('info-anydesk');

        if (!modalTitle || !tipoInput || !step1 || !soporteForm) return;

        modalTitle.innerText = "Solicitud de Soporte: " + tipo;
        tipoInput.value = tipo;
        step1.classList.add('d-none');
        soporteForm.classList.remove('d-none');

        if (infoRemoto) {
            tipo === 'Remoto' ? infoRemoto.classList.remove('d-none') : infoRemoto.classList.add('d-none');
        }
    };

    window.hideForm = function () {
        const modalTitle = document.getElementById('modalTitle');
        const step1 = document.getElementById('step1');
        const soporteForm = document.getElementById('soporteForm');
        const infoRemoto = document.getElementById('info-anydesk');

        if (modalTitle) modalTitle.innerText = "¿Qué tipo de soporte necesitas?";
        if (step1) step1.classList.remove('d-none');
        if (soporteForm) soporteForm.classList.add('d-none');
        if (infoRemoto) infoRemoto.classList.add('d-none');
    };

    if (modalElement) {
        modalElement.addEventListener('hidden.bs.modal', function () {
            window.hideForm();
            if (form) form.reset();
        });
    }

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const datos = {
                tipo: document.getElementById('tipoSeleccionado').value,
                nombre: document.getElementById('nombre').value,
                telefono: document.getElementById('telefono').value,
                email: document.getElementById('email').value,
                problema: document.getElementById('problema').value,
                fecha: new Date().toISOString()
            };
            console.log("ME-TECH | Datos listos:", datos);
            alert(`¡Gracias ${datos.nombre}! Tu solicitud ha sido registrada.`);

            let modalInstance = bootstrap.Modal.getInstance(modalElement);
            if (!modalInstance) modalInstance = new bootstrap.Modal(modalElement);
            modalInstance.hide();
        });
    }

    // Lógica de Contacto
    const contactForm = document.getElementById('mainContactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = {
                nombre: this.querySelector('[name="nombre"]').value.trim(),
                email: this.querySelector('[name="email"]').value.trim(),
                telefono: this.querySelector('[name="telefono"]').value.trim(),
                mensaje: this.querySelector('[name="mensaje"]').value.trim()
            };

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(formData.email)) {
                alert("Por favor, ingresa un correo válido.");
                return;
            }
            if (formData.mensaje.length < 10) {
                alert("Por favor, danos más detalle.");
                return;
            }

            console.log("Contacto enviado:", formData);
            alert("¡Mensaje recibido!");
            this.reset();
        });

        const telefonoInput = document.querySelector('input[name="telefono"]');
        if (telefonoInput) {
            telefonoInput.addEventListener('keypress', function (e) {
                if (isNaN(String.fromCharCode(e.which)) && e.which !== 8) {
                    e.preventDefault();
                }
            });
        }
    }
};

// FUNCIONES UTILITARIAS Y DE CARGA
const cargarSeccion = async (id, archivos) => {
    const contenedor = document.getElementById(id);
    if (!contenedor) return;
    const respuestas = await Promise.all(
        archivos.map(ruta => fetch(ruta).then(r => r.text()))
    );
    contenedor.innerHTML = respuestas.join('');
};

function cargar(pagina) {
    fetch(pagina)
        .then(r => r.text())
        .then(html => {
            document.getElementById('content').innerHTML = html;
            window.scrollTo(0, 0);
        });
}

function cargarArr(id) {
    const archivos = arPaginas[id];
    cargarSeccion(id, archivos).then(() => {
        window.scrollTo(0, 0);
    });
}

// ACCIONES (Dark Mode, etc)
const actions = {
    toggleTheme() {
        const btnTheme = document.getElementById('btn-theme');
        const themeIcon = document.getElementById('theme-icon');
        const htmlElement = document.documentElement;

        if (!btnTheme || !themeIcon) return;

        const savedTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-bs-theme', savedTheme);
        themeIcon.classList.toggle('fa-moon', savedTheme === 'light');
        themeIcon.classList.toggle('fa-lightbulb', savedTheme === 'dark');

        const newBtn = btnTheme.cloneNode(true);
        btnTheme.parentNode.replaceChild(newBtn, btnTheme);

        newBtn.addEventListener('click', () => {
            const isDark = htmlElement.getAttribute('data-bs-theme') === 'dark';
            const next = isDark ? 'light' : 'dark';

            htmlElement.setAttribute('data-bs-theme', next);
            localStorage.setItem('theme', next);

            const icon = document.getElementById('theme-icon'); 
            if (icon) {
                icon.classList.toggle('fa-moon', next === 'light');
                icon.classList.toggle('fa-lightbulb', next === 'dark');
            }
        });
    }
};

async function renderUI(config) {
    if (config.target) {
        const container = document.getElementById(config.target);
        if (!container) return;

        container.innerHTML = '';

        for (const [tipo, items] of Object.entries(config)) {
            if (tipo === "target") continue;

            if (tipo === "nav") {
                for (const item of items) {
                    const nav = document.createElement("nav");
                    nav.className = item.class;

                    const lugar = document.createElement("div");
                    lugar.className = "container";

                    const a = document.createElement("a");
                    a.className = "navbar-brand";
                    if (item.hrefLogo) a.href = item.hrefLogo;

                    const img = document.createElement("img");
                    img.src = item.logo;
                    if (item.classLogo) img.className = item.classLogo;
                    a.appendChild(img);

                    const btnResponsive = `
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#${item.idBtnLugar}">
                            <span class="navbar-toggler-icon"></span>
                        </button>`;

                    const divBtnNav = document.createElement("div");
                    divBtnNav.className = "collapse navbar-collapse";
                    divBtnNav.id = item.idBtnLugar

                    const ulBtnNav = document.createElement("ul");
                    ulBtnNav.className = "navbar-nav ms-auto mb-2 mb-lg-0";
                    ulBtnNav.id = item.idBotones

                    divBtnNav.appendChild(ulBtnNav);
                    lugar.appendChild(a);
                    lugar.insertAdjacentHTML("beforeend", btnResponsive);
                    lugar.appendChild(divBtnNav);
                    nav.appendChild(lugar);
                    container.appendChild(nav);
                }
            }

            if (tipo === "nav-item") {
                for (const item of items) {
                    const li = document.createElement("li");
                    li.className = "nav-item";

                    const a = document.createElement("a");
                    a.className = "nav-link";
                    a.textContent = item.text;
                    if (item.href) a.href = item.href;

                    Object.entries(item).forEach(([k, v]) => {
                        if (!["text", "href"].includes(k) && v) {
                            a.setAttribute(k, v);
                        }
                    });
                    li.appendChild(a);
                    container.appendChild(li);
                }
            }

            if (tipo === "normalLI") {
                for (const item of items) {
                    const li = document.createElement("li");
                    if (item.class) li.className = item.class;
                    if (item.faA) li.insertAdjacentHTML("beforeend", item.faA);
                    if (item.text) li.insertAdjacentHTML("beforeend", item.text);
                    if (item.faD) li.insertAdjacentHTML("beforeend", item.faD);
                    container.appendChild(li);
                }
            }

            if (tipo === "button") {
                for (const item of items) {
                    const btn = document.createElement("button");
                    if (item.id) btn.id = item.id;
                    if (item.class) btn.className = item.class;
                    if (item.title) btn.title = item.title;
                    if (item.faA) btn.insertAdjacentHTML("beforeend", item.faA);
                    if (item.text) btn.insertAdjacentHTML("beforeend", `<span>${item.text}</span>`);
                    if (item.faD) btn.insertAdjacentHTML("beforeend", item.faD);
                    container.appendChild(btn);
                }
            }
        }
        return;
    }

    for (const subConfig of Object.values(config)) {
        await renderUI(subConfig);
    }
}

function bindActions(config) {
    if (config.target) {
        Object.values(config).forEach(items => {
            if (!Array.isArray(items)) return;
            items.forEach(item => {
                if (item.action && actions[item.action]) {
                    actions[item.action]();
                }
            });
        });
        return;
    }
    Object.values(config).forEach(sub => bindActions(sub));
}