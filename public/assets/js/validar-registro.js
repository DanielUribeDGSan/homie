
const registrarFormPropietario = (e) => {
    e.preventDefault();

    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;

    if (name == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Nombre</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Teléfono</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone.length < 10 || phone.length > 20) {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El número no es valido',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (email == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Email</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (!validar_email(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Tu email no es valido, escribelo correctamente',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    Livewire.emitTo('arendatario.datos-propietario', 'registrarFormulario');
}


const registrarFormInvitacionPropietario = (e) => {
    e.preventDefault();

    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;
    const type = document.querySelector('#type').value;

    if (name == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Nombre</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Teléfono</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone.length < 10 || phone.length > 20) {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El número no es valido',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (email == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Email</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (!validar_email(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Tu email no es valido, escribelo correctamente',
            confirmButtonText: 'Aceptar',
        });
        return false;
    } else if (password == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Contraseña</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (password.length < 6) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Contraseña</b>" es invalido, por lo menos debe de tenr 6 dígitos',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (type == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Tipo de usuario</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    Livewire.emitTo('invitaciones', 'invitacion-propietario');
}


const registrarForm = (e) => {
    e.preventDefault();

    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;
    const type = document.querySelector('#type').value;

    if (name == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Nombre</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Teléfono</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone.length < 10 || phone.length > 20) {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El número no es valido',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (email == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Email</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (!validar_email(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Tu email no es valido, escribelo correctamente',
            confirmButtonText: 'Aceptar',
        });
        return false;
    } else if (password == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Contraseña</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (password.length < 6) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Contraseña</b>" es invalido, por lo menos debe de tenr 6 dígitos',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (type == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Tipo de usuario</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    Livewire.emitTo('form-register', 'registrarFormulario');
}

