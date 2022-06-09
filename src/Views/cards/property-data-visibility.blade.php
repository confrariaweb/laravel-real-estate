<div class="card">
    <div class="card-header">
        <h4 class="card-title">Visibilidade no site e portais</h4>
    </div>
    <div class="card-body">
        <label class="form-label">
            {{ __('Valores') }}
        </label>
        <div class="row">
            <div class="col">
                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="custom-control-input" checked="" id="vendaCheckBox" required="">
                    <label class="custom-control-label" for="vendaCheckBox">Venda</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                    <label class="custom-control-label" for="localcaoCheckBox">Locação</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="custom-control-input" checked="" id="temporadaCheckBox" required="">
                    <label class="custom-control-label" for="temporadaCheckBox">Temporada</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="custom-control-input" checked="" id="iptuCheckBox" required="">
                    <label class="custom-control-label" for="iptuCheckBox">IPTU</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="custom-control-input" checked="" id="condominioCheckBox" required="">
                    <label class="custom-control-label" for="condominioCheckBox">Condomínio</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Mapa no site') }}
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="site map"> Exata</label>
                        <label class="radio-inline mr-3"><input type="radio" name="site map"> Aproximada</label>
                        <label class="radio-inline mr-3"><input type="radio" name="site map"> Não mostrar</label>
                    </div>     
                </div>
            </div>
        </div>

    </div>
</div>