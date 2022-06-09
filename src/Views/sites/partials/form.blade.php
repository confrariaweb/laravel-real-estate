@if(!isset($site))
    <div class="row">
        <div class="col-4">    
            <div class="form-group">
                <label class="control-label">Tipo de site <span class="required"> * </span></label>
                {!! Form::select('type_id', $types, isset($site) ? $site->type_id : null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label">Titulo <span class="required"> * </span></label>
                {!! Form::text('title', isset($site) ? $site->title : null, ['class' => 'form-control', 'placeholder' => 'Digite o titulo', 'required']) !!}
            </div>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label class="control-label">Titulo <span class="required"> * </span></label>
                {!! Form::text('title', isset($site) ? $site->title : null, ['class' => 'form-control', 'placeholder' => 'Digite o titulo', 'required']) !!}
            </div>
        </div>
        <div class="col-4">    
            <div class="form-group">
                <label class="control-label">Status <span class="required"> * </span></label>
                {!! Form::select('status', [1 => 'Ativo', 0 => 'Desativado'], isset($site) ? $site->status : null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label class="control-label">Template <span class="required"> * </span></label>
                {!! Form::select('template_id', $templates, isset($site) ? $site->template_id : null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label class="control-label">Dominio <span class="required"> * </span></label>
                {!! Form::select('domains[]', $domains, isset($site) ? $site->domains->pluck('id') : null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
    </div>

    @if(isset($fields))
    <div class="row">
        @foreach($fields as $name => $field)
        <div class="col-6">
            <div class="form-group">
                <label class="control-label">{{ $field['label']?? '' }} </label>
                <input type="{{ $field['type']?? 'text' }}" name="options[template][{{ $name }}]" value="{{ $site->options['template'][$name]?? null }}" class="form-control" placeholder="{{ $field['placeholder']?? '' }}">
            </div>
        </div>
        @endforeach
    </div>
    @endif

@endif