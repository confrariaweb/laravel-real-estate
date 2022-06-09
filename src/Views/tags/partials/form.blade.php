{!! Form::hidden('account_id', $tag->id?? account()->id?? null) !!}

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Slug') }}
                            </label>
                            {!! Form::text('slug', $tag->slug?? null, ['class' => 'form-control', 'placeholder' => __('Slug')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Nome') }}
                            </label>
                            {!! Form::text('name', $tag->name?? null, ['class' => 'form-control', 'placeholder' => __('Nome')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Cor') }}
                            </label>
                            {!! Form::color('color', $tag->color?? null, ['class' => 'form-control', 'placeholder' => __('Cor')]) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-right">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>