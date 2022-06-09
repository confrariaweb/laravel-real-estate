<div class="card">
    <div class="card-header">
        <h4 class="card-title">Valores</h4>
    </div>
    <div class="card-body">
        
        <div class="row">
            @foreach($finalities as $finality_k => $finality_v)
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">
                            {{ __($finality_v) }}
                        </label>
                        {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('R$')]) !!}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-6">
                <label class="form-label">
                    {{ __('Valor de IPTU') }}
                </label>
                <div class="input-group mb-3 input-info">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" class="">
                        </div>
                        <div class="input-group-text">Isento</div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        Período do IPTU
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Mensal</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Anual</label>
                    </div>     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="form-label">
                    {{ __('Valor de condomínio') }}
                </label>
                <div class="input-group mb-3 input-info">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" class="">
                        </div>
                        <div class="input-group-text">Isento</div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Seguro Incêndio (anual)') }}
                    </label>
                    {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('Seguro Incêndio (anual)')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Taxa de limpeza') }}
                    </label>
                    {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('Taxa de limpeza')]) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Financiável') }}
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Sim</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Não</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> MCMV / CVA</label>
                    </div>     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Índice de reajuste</label>
                    <select class="form-control" id="sel1">
                        <option>CUB/RS R 16-A</option>
                        <option>IGP-M</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Valor Base') }}
                    </label>
                    {!! Form::number('andar', null, ['class' => 'form-control', 'placeholder' => __('Valor Base')]) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Aceita permuta') }}
                    </label>
                    <div class="form-group mb-0">
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Sim</label>
                        <label class="radio-inline mr-3"><input type="radio" name="optradio"> Não</label>
                    </div>     
                </div>
            </div>
        </div>



    </div>
</div>