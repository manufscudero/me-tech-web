document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('soporteForm');
    const modalElement = document.getElementById('modalSoporte');

    // MOSTRAR FORMULARIO (UNIFICADO)
    window.showForm = function (tipo) {
        const modalTitle = document.getElementById('modalTitle');
        const tipoInput = document.getElementById('tipoSeleccionado');
        const step1 = document.getElementById('step1');
        const soporteForm = document.getElementById('soporteForm');
        const infoRemoto = document.getElementById('info-anydesk');

        if (!modalTitle || !tipoInput || !step1 || !soporteForm) {
            console.error("Elementos del formulario no encontrados");
            return;
        }

        // Configuración de textos y valores
        modalTitle.innerText = "Solicitud de Soporte: " + tipo;
        tipoInput.value = tipo;

        // Gestión de la visibilidad de los pasos
        step1.classList.add('d-none');
        soporteForm.classList.remove('d-none');

        // Mostrar/Ocultar info de AnyDesk solo para Remoto
        if (infoRemoto) {
            if (tipo === 'Remoto') {
                infoRemoto.classList.remove('d-none');
            } else {
                infoRemoto.classList.add('d-none');
            }
        }
    };

    // VOLVER A OPCIONES
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

    // RESETEO DEL MODAL AL CERRAR
    if (modalElement) {
        modalElement.addEventListener('hidden.bs.modal', function () {
            window.hideForm();
            if (form) form.reset();
        });
    }
    // ENVÍO DEL FORMULARIO
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

            console.log("ME-TECH | Datos listos para enviar:", datos);
            alert(`¡Gracias ${datos.nombre}! Tu solicitud ha sido registrada.`);

            let modalInstance = bootstrap.Modal.getInstance(modalElement);
            if (!modalInstance) {
                modalInstance = new bootstrap.Modal(modalElement);
            }
            modalInstance.hide();
        });
    }
});

// DARK MODE (FUERA DEL DOMCONTENTLOADED)
const btnTheme = document.getElementById('btn-theme');
const themeIcon = document.getElementById('theme-icon');
const htmlElement = document.documentElement;

if (btnTheme && themeIcon) {
    btnTheme.addEventListener('click', () => {
        if (htmlElement.getAttribute('data-bs-theme') === 'dark') {
            htmlElement.setAttribute('data-bs-theme', 'light');
            themeIcon.classList.replace('fa-lightbulb', 'fa-moon');
            localStorage.setItem('theme', 'light');
        } else {
            htmlElement.setAttribute('data-bs-theme', 'dark');
            themeIcon.classList.replace('fa-moon', 'fa-lightbulb');
            localStorage.setItem('theme', 'dark');
        }
    });

    // Cargar preferencia guardada
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        htmlElement.setAttribute('data-bs-theme', savedTheme);
        if (savedTheme === 'dark') {
            themeIcon.classList.replace('fa-moon', 'fa-lightbulb');
        } else {
            themeIcon.classList.replace('fa-lightbulb', 'fa-moon');
        }
    }
}

//PAGINA DE CONTACTO
const contactForm = document.getElementById('mainContactForm');

if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Capturamos los campos específicos de ESTE form
        const formData = {
            nombre: this.querySelector('[name="nombre"]').value.trim(),
            email: this.querySelector('[name="email"]').value.trim(),
            telefono: this.querySelector('[name="telefono"]').value.trim(),
            mensaje: this.querySelector('[name="mensaje"]').value.trim()
        };

        // Validación de Email con Expresión Regular
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(formData.email)) {
            alert("Por favor, ingresa un correo electrónico válido.");
            return;
        }

        if (formData.mensaje.length < 10) {
            alert("Por favor, danos un poco más de detalle sobre tu problema.");
            return;
        }

        // Simulación de envío exitoso
        console.log("Enviando datos de Contacto:", formData);
        alert("¡Mensaje recibido! Te responderemos al correo o WhatsApp pronto.");
        this.reset();
    });
    const telefonoInput = document.querySelector('input[name="telefono"]');

    if (telefonoInput) {
        telefonoInput.addEventListener('keypress', function (e) {
            // Bloquea cualquier tecla que no sea un número (0-9)
            if (isNaN(String.fromCharCode(e.which)) && e.which !== 8) {
                e.preventDefault();
            }
        });
    }
}