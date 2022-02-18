<div>
    <div class="container">
        <h1>Pagar Productos de Carrito de Compra</h1>
        {{-- @if ($errors->any())
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert-danger justify-content-center align-items-center text-center">
                <ul style="list-style: none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif --}}

        <div class="mb-3">
            <label for="" class="form-label">Nombre Completo</label>
            <input type="text" name="fullname" class="form-control" id="fullname" wire:model="fullname">
                @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Region o estado</label>
            <input type="text" name="state" class="form-control" id="state" wire:model="state">
                @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Ciudad o Distrito</label>
            <input type="text" name="city" class="form-control" id="city" wire:model="city">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" name="address" class="form-control" id="address" wire:model="address">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="number" name="phone" class="form-control" id="phone" wire:model="phone">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Codigo postal</label>
            <input type="number" name="zipcode" class="form-control" id="zipcode" wire:model="zipcode">
                @error('zipcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" wire:click="make_order()">Realizar Pago</button>
        </div>

    </div>

    </div>
</div>
