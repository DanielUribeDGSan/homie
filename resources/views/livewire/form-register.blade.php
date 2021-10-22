<div x-data class="mt-3">
    <form onsubmit="return registrarForm(event)">
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
            <label for="password" class="col-12 col-form-label fw-100 mt-2">Contraseña</label>
            <div class="col-lg-12 col-md-12 col-12">
                <input type="password" class="form-input" id="password" onkeyup="onlyLetrasNum(this)"
                    maxlength="255" wire:model.defer="createForm.password" autocomplete="off">
                @if ($errors->has('createForm.password'))
                    <span>{{ $errors->first('createForm.password') }}</span>
                @endif
            </div>
            <label for="type" class="col-12 col-form-label fw-100 mt-2">Tipo de usuario</label>
            <div class="col-lg-12 col-md-12 col-12">
                <select class="form-input" id="type" wire:model.defer="createForm.type">
                    <option value="" selected disabled>Selecciona un tipo de usuario</option>
                    <option value="1">Broker</option>
                    <option value="2">Propietario</option>
                    <option value="3">Arendatario</option>
                </select>
                @if ($errors->has('createForm.type'))
                    <span>{{ $errors->first('createForm.type') }}</span>
                @endif
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-orange-sm" wire:loading.attr="disabled"
                    wire:loading.remove>Registrarme</button>
                <div wire:loading wire:loading.class="d-flex align-items-center">
                    {{-- <x-loading /> --}}
                    Validando...
                </div>
            </div>
        </div>

    </form>
</div>
