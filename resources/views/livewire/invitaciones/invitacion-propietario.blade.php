<div x-data class="mt-3">
    <form onsubmit="return registrarFormInvitacionPropietario(event)">
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
            <div class="col-lg-6 col-md-6 col-12">
                <label for="phone" class="col-form-label fw-100 mt-2">Teléfono</label>
                <input type="text" class="form-input" id="phone" onkeyup="onlyNum(this)" maxlength="20"
                    wire:model.defer="createForm.phone" autocomplete="off">
                @if ($errors->has('createForm.phone'))
                    <span>{{ $errors->first('createForm.phone') }}</span>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="password" class="col-form-label fw-100 mt-2">Contraseña</label>
                <input type="password" class="form-input" id="password" onkeyup="verPassword(this)" maxlength="255"
                    wire:model.defer="createForm.password" autocomplete="off">
                <small id="verPassword"></small>
                @if ($errors->has('createForm.password'))
                    <span>{{ $errors->first('createForm.password') }}</span>
                @endif
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-orange-sm" wire:loading.attr="disabled"
                    wire:loading.remove>Registrarme</button>
                <div wire:loading wire:loading.class="d-flex align-items-center">
                    <x-loading />
                </div>
            </div>
        </div>

    </form>
</div>
