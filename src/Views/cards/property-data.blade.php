<div class="card">
    <div class="card-header">
        <h4 class="card-title">Dados do imóvel</h4>
    </div>
    <div class="card-body">

        <div class="row">        
            <div class="col-8">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Tipo o imóvel') }}
                        <span class="required"> * </span>
                    </label>
                    {{ Form::select('type_id', $types, $property->type_id?? null, ['class' => 'form-control', 'required' => 'required']) }}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Código') }}
                    </label>
                    {!! Form::text('code', $property->code?? null, ['class' => 'form-control', 'placeholder' => __('Código')]) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Titulo') }}
                    </label>
                    {!! Form::text('title', $property->title?? null, ['class' => 'form-control', 'placeholder' => __('Titulo')]) !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Destaque') }}
                    </label>
                    <div class="custom-control custom-checkbox mb-3 checkbox-success check-lg">
                        <input type="checkbox" name="featured" class="custom-control-input" {{ isset($property->featured)? "checked='checked'" : " " }} id="checkBoxDestaque">
                        <label class="custom-control-label" for="checkBoxDestaque"></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Slug') }}
                    </label>
                    {!! Form::text('slug', $property->slug?? null, ['class' => 'form-control', 'placeholder' => __('Slug')]) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Finalidades') }}
                        <span class="required"> * </span>
                    </label>
                    <div class="row">
                        @forelse($finalities as $finality_k => $finality_v)
                            <div class="col-6 col-sm-4">
                                <div class="custom-control custom-checkbox mb-3 checkbox-success">
                                    {!! Form::checkbox('finalities[]', 1, isset($property->finalities)? $property->finalities->pluck('name', 'id') : NULL, ['id' => 'checkBoxFinalidades-' . $finality_k, 'class' => 'custom-control-input', 'placeholder' => __('Finalidades')]) !!}
                                    <label class="custom-control-label" for="checkBoxFinalidades-{{ $finality_k }}">{{ $finality_v }}</label>
                                </div>
                            </div>
                        @empty
                            <div class="col-6 col-sm-4">
                                <p>Nenhuma finalidade cadastrada</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>