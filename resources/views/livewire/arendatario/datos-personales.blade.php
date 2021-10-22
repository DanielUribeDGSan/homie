<div x-data class="mt-3">
    <form onsubmit="return registrarForm(event)">
        <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="tipo_persona" class="col-form-label fw-100">Tipo de persona</label>
                <select class="form-input" id="tipo_persona" wire:model.defer="createForm.tipo_persona">
                    <option value="Moral">Moral</option>
                    <option value="Fisica">Fisica</option>
                </select>
                @if ($errors->has('createForm.tipo_persona'))
                    <span>{{ $errors->first('createForm.tipo_persona') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="rfc" class="col-form-label fw-100">RFC</label>
                <input type="text" class="form-input" id="rfc" onkeyup="onlyLetrasNum(this)" maxlength="255"
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
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Otro">Otro</option>
                </select>
                @if ($errors->has('createForm.estado_civil'))
                    <span>{{ $errors->first('createForm.estado_civil') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="ingresos_netos" class="col-form-label fw-100">Ingresos netos</label>
                <input type="text" class="form-input" id="ingresos_netos" onkeyup="onlyNum(this)" maxlength="255"
                    wire:model.defer="createForm.ingresos_netos" autocomplete="off">
                @if ($errors->has('createForm.ingresos_netos'))
                    <span>{{ $errors->first('createForm.ingresos_netos') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <label for="identificacion_oficial" class="col-form-label fw-100">Identificación oficial</label>
                <input type="file" class="form-input" id="identificacion_oficial"
                    wire:model.defer="createForm.identificacion_oficial">
                @if ($errors->has('createForm.identificacion_oficial'))
                    <span>{{ $errors->first('createForm.identificacion_oficial') }}</span>
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
                <input type="file" class="form-input" id="documentacion"
                    wire:model.defer="createForm.documentacion">
                @if ($errors->has('createForm.documentacion'))
                    <span>{{ $errors->first('createForm.documentacion') }}</span>
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
</div>
