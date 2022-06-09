<div class="card">
    <div class="card-header">
        <h4 class="card-title">Caracteristicas</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Etiquetas') }}
                    </label>
                    {!! Form::select('andar', [], null, ['class' => 'form-control', 'placeholder' => __('Etiquetas')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Dormitórios
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 0</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 1</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 2</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 3</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> outro</label>
                    </div>     
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Suites
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 0</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 1</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 2</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 3</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> outro</label>
                    </div>     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Banheiros
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 0</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 1</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 2</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 3</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> outro</label>
                    </div>     
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Vagas de garagem
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 0</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 1</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 2</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> 3</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> outro</label>
                    </div>     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Condição
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Em construção</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Na planta</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Novo</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Usado</label>
                    </div>     
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Mobiliado
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> sim</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> não</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> semibobiliado</label>
                    </div>     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        Condição
                    </label>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Em construção</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Na planta</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Novo</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Usado</label>
                    </div>    
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        Mobiliado
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> sim</label>
                    </div>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> não</label>
                    </div>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> semibobiliado</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        Orientação solar
                    </label>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Norte</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Sul</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Leste</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="custom-control-input" checked="" id="localcaoCheckBox" required="">
                        <label class="custom-control-label" for="localcaoCheckBox">Oeste</label>
                    </div>    
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        Posição
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> Frente</label>
                    </div>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> Lateral</label>
                    </div>
                    <div class="form-group mb-0">
                        <label class="radio mr-3"><input type="radio" name="optradio"> Fundos</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Pessoas/acomodações') }}
                    </label>
                    {!! Form::select('andar', [], null, ['class' => 'form-control', 'placeholder' => __('Pessoas/acomodações')]) !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Distancia do mar') }}
                    </label>
                    {!! Form::select('andar', [], null, ['class' => 'form-control', 'placeholder' => __('Distancia do mar')]) !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Entrega da obra') }}
                    </label>
                    {!! Form::select('andar', [], null, ['class' => 'form-control', 'placeholder' => __('Entrega da obra')]) !!}
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        Tipo de piso
                    </label>
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox1aa" required="">
                                <label class="custom-control-label" for="customCheckBox1aa">Checkbox 1</label>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="custom-control custom-checkbox mb-3 checkbox-info">
                                <input type="checkbox" class="custom-control-input" checked="" id="customCheckBox2" required="">
                                <label class="custom-control-label" for="customCheckBox2">Checkbox 2</label>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="custom-control custom-checkbox mb-3 checkbox-success">
                                <input type="checkbox" class="custom-control-input" checked="" id="customCheckBox3" required="">
                                <label class="custom-control-label" for="customCheckBox3">Checkbox 3</label>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="custom-control custom-checkbox mb-3 checkbox-warning">
                                <input type="checkbox" class="custom-control-input" checked="" id="customCheckBox4" required="">
                                <label class="custom-control-label" for="customCheckBox4">Checkbox 4</label>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="custom-control custom-checkbox mb-3 checkbox-danger">
                                <input type="checkbox" class="custom-control-input" checked="" id="customCheckBox5" required="">
                                <label class="custom-control-label" for="customCheckBox5">Checkbox 5</label>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

    </div>
</div>