<div x-data class="mt-3">
    <form onsubmit="return datosPersonales(event)">
        <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="tipo_persona" class="col-form-label fw-100">Tipo de persona</label>
                <select class="form-input" id="tipo_persona" wire:model.defer="createForm.tipo_persona">
                    <option value="">Selecciona una opción</option>
                    <option value="Moral">Moral</option>
                    <option value="Fisica">Fisica</option>
                </select>
                @if ($errors->has('createForm.tipo_persona'))
                    <span>{{ $errors->first('createForm.tipo_persona') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="rfc" class="col-form-label fw-100">RFC</label>
                <input type="text" class="form-input" id="rfc" onkeyup="onlyLetrasNum(this)" maxlength="13"
                    wire:model.defer="createForm.rfc" autocomplete="off">
                @if ($errors->has('createForm.rfc'))
                    <span>{{ $errors->first('createForm.rfc') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="fecha_nacimiento" class="col-form-label fw-100">Fecha de nacimiento</label>
                <input type="date" class="form-input" id="fecha_nacimiento"
                    wire:model.defer="createForm.fecha_nacimiento" autocomplete="off">
                @if ($errors->has('createForm.fecha_nacimiento'))
                    <span>{{ $errors->first('createForm.fecha_nacimiento') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="estado_civil" class="col-form-label fw-100">Estado civil</label>
                <select class="form-input" id="estado_civil" wire:model.defer="createForm.estado_civil">
                    <option value="">Selecciona una opción</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Otro">Otro</option>
                </select>
                @if ($errors->has('createForm.estado_civil'))
                    <span>{{ $errors->first('createForm.estado_civil') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="ingresos_netos" class="col-form-label fw-100">Ingresos netos mensuales</label>
                <input type="text" class="form-input" id="ingresos_netos" onkeyup="onlyNum(this)" maxlength="255"
                    wire:model.defer="createForm.ingresos_netos" autocomplete="off">
                @if ($errors->has('createForm.ingresos_netos'))
                    <span>{{ $errors->first('createForm.ingresos_netos') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="identificacion_oficial" class="col-form-label fw-100">Identificación oficial</label>
                <input type="file" class="form-input" id="identificacion_oficial"
                    wire:model.defer="identificacion_oficial">
                @if ($errors->has('identificacion_oficial'))
                    <span>{{ $errors->first('identificacion_oficial') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="direccion_vivienda" class="col-form-label fw-100">Direccion vivienda actual</label>
                <input type="text" class="form-input" id="direccion_vivienda" onkeyup="onlyLetrasNum(this)"
                    maxlength="255" wire:model.defer="createForm.direccion_vivienda" autocomplete="off">
                @if ($errors->has('createForm.direccion_vivienda'))
                    <span>{{ $errors->first('createForm.direccion_vivienda') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="institucion_educativa" class="col-form-label fw-100">Institución Educativa</label>
                <input type="text" class="form-input" id="institucion_educativa" onkeyup="onlyLetrasNum(this)"
                    maxlength="255" wire:model.defer="createForm.institucion_educativa" autocomplete="off">
                @if ($errors->has('createForm.institucion_educativa'))
                    <span>{{ $errors->first('createForm.institucion_educativa') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="historial_crediticio" class="col-form-label fw-100">Historial crediticio</label>
                <input type="text" class="form-input" id="historial_crediticio" onkeyup="onlyLetrasNum(this)"
                    maxlength="255" wire:model.defer="createForm.historial_crediticio" autocomplete="off">
                @if ($errors->has('createForm.historial_crediticio'))
                    <span>{{ $errors->first('createForm.historial_crediticio') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="trabajo" class="col-form-label fw-100">Trabajo</label>
                <input type="text" class="form-input" id="trabajo" onkeyup="onlyLetrasNum(this)" maxlength="255"
                    wire:model.defer="createForm.trabajo" autocomplete="off">
                @if ($errors->has('createForm.trabajo'))
                    <span>{{ $errors->first('createForm.trabajo') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="empresa" class="col-form-label fw-100">Nombre de la empresa</label>
                <input type="text" class="form-input" id="empresa" onkeyup="onlyLetrasNum(this)" maxlength="255"
                    wire:model.defer="createForm.empresa" autocomplete="off">
                @if ($errors->has('createForm.empresa'))
                    <span>{{ $errors->first('createForm.empresa') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="documentacion" class="col-form-label fw-100">Documentación</label>
                <input type="file" class="form-input" name="documentacion[]" id="documentacion"
                    wire:model.defer="documentacion" multiple>
                @if ($errors->has('documentacion'))
                    <span>{{ $errors->first('documentacion') }}</span>
                @endif
            </div>
            <div class="col-6 mt-5">
                <button type="submit" class="btn btn-orange-sm" wire:loading.attr="disabled"
                    wire:loading.remove>Siguiente</button>
                <div wire:loading wire:loading.class="d-flex align-items-center">
                    <x-loading />
                </div>
            </div>
            <div class="col-6 mt-5 d-flex align-items-center justify-content-end">
                <article>
                    <h1 class="text-secundary">1/2</h1>
                </article>
            </div>
        </div>
    </form>
    <script>
        const datosPersonales = (e) => {
            e.preventDefault();

            const tipo_persona = document.querySelector('#tipo_persona').value;
            const rfc = document.querySelector('#rfc').value;
            const fecha_nacimiento = document.querySelector('#fecha_nacimiento').value;
            const estado_civil = document.querySelector('#estado_civil').value;
            const ingresos_netos = document.querySelector('#ingresos_netos').value;
            const identificacion_oficial = document.querySelector('#identificacion_oficial').value;
            const direccion_vivienda = document.querySelector('#direccion_vivienda').value;
            const institucion_educativa = document.querySelector('#institucion_educativa').value;
            const historial_crediticio = document.querySelector('#historial_crediticio').value;
            const trabajo = document.querySelector('#trabajo').value;
            const empresa = document.querySelector('#empresa').value;
            const documentacion = document.querySelector('#documentacion').value;


            if (tipo_persona == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Tipo de persona</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (rfc == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>RFC</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (fecha_nacimiento == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Fecha de nacimiento</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (estado_civil == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Estado civil</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (ingresos_netos == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Ingresos netos mensuales</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (identificacion_oficial == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Identificación oficial</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (direccion_vivienda == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Direccion vivienda actual</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (institucion_educativa == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Institución Educativa</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (historial_crediticio == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Historial crediticio</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (trabajo == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Trabajo</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (empresa == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Nombre de la empresa</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            } else if (documentacion == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    html: 'El campo "<b>Documentación</b>" no puede quedar vacío',
                    confirmButtonText: 'Aceptar',
                });
                return false;
            }
            Livewire.emitTo('arendatario.datos-personales', 'registrarFormulario');
        }
    </script>

</div>
