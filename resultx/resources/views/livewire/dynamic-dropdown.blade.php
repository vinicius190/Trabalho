<div class="p-6">
    <div class="card">
        <h5 class="card-header bg-secondary">Dynamic Dropdown</h5>
        <div class="card-body">
            <div class="my-3 px-6">
                <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
                <select wire:model="estado" name="estado" id="estado" class="form-select form-select-sm">
                    <option value="" selected>{{__('Selecione um estado...')}}</option>
                    @foreach ($estados as $estado)
                        <option value="{{$estado->sigla}}">{{$estado->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="my-3 px-6">
                <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade</label>
                <select name="cidade" id="cidade" class="form-select form-select-sm">
                    <option value="" selected>{{__('Selecione uma cidade...')}}</option>
                    @if ($this->estado)
                        @foreach ($municipios as $municipio)
                            <option value="{{$municipio->id}}">{{$municipio->nome}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
</div>
