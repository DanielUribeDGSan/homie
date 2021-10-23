<div x-data class="mt-3">
    <form onsubmit="return registrarFormInquilinoAPropietario(event)">
        <div class="form-group row">
            <label for="name" class="col-12 col-form-label fw-100">Nombre completo</label>
            <div class="col-lg-12 col-md-12 col-12">
                <input type="text" class="form-input" id="name" onkeyup="onlyLetrasNum(this)" maxlength="255"
                    wire:model.defer="createForm.name" autocomplete="off">
                @if ($errors->has('createForm.name'))
                    <span>{{ $errors->first('createForm.name') }}</span>
                @endif
            </div>
            <label for="email" class="col-12 col-form-label fw-100 mt-2">Correo
                electrónico</label>
            <div class="col-lg-12 col-md-12 col-12">
                <input type="text" class="form-input" id="email" maxlength="255" wire:model.defer="createForm.email"
                    autocomplete="off">
                @if ($errors->has('createForm.email'))
                    <span>{{ $errors->first('createForm.email') }}</span>
                @endif
            </div>
            <label for="phone" class="col-12 col-form-label fw-100 mt-2">Teléfono</label>
            <div class="col-lg-12 col-md-12 col-12">
                <input type="text" class="form-input" id="phone" onkeyup="onlyNum(this)" maxlength="20"
                    wire:model.defer="createForm.phone" autocomplete="off">
                @if ($errors->has('createForm.phone'))
                    <span>{{ $errors->first('createForm.phone') }}</span>
                @endif
            </div>
            <div class="col-12 mt-4">
                {{-- <hr />
                <p class="mt-4">Opcional</p>
                <p class="mt-2">Datos del Broker</p> --}}
                {{-- @livewire('broker.datos-personales') --}}
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-orange-sm" wire:loading.attr="disabled"
                    wire:loading.remove>Registrar datos</button>
                <div wire:loading wire:loading.class="d-flex align-items-center">
                    <x-loading />
                </div>
            </div>
        </div>
    </form>
    <script>
        const registrarFormInquilinoAPropietario = (e) => {
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
            } else if (phone == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Teléfono</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (phone.length < 10 || phone.length > 20) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El número no es valido',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (email == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    html: 'El campo "<b>Email</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (!validar_email(email)) {
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
    </script>
</div>
