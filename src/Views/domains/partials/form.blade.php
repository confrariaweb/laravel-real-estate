<div class="row">
    <div class="col-8">
        <div class="form-group">
            <label class="control-label">Dominio <span class="required"> * </span></label>
            {!! Form::text('domain', isset($domain) ? $domain->domain : null, ['class' => 'form-control', 'placeholder' => 'Digite o dominio', 'required', 'readonly' =>  isset($domain)? true : false]) !!}
        </div>
    </div>
    <div class="col-4">    
        <div class="form-group">
            <label class="control-label">Status <span class="required"> * </span></label>
            {!! Form::select('status', [1 => 'Ativo', 0 => 'Desativado'], isset($domain) ? $domain->status : null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>
