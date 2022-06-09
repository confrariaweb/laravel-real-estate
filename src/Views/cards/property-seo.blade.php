<div class="card">
    <div class="card-header">
        <h4 class="card-title">Informações de SEO do imóvel</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Meta title') }}
                    </label>
                    {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('Meta title')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Meta description') }}
                    </label>
                    {!! Form::textarea('andar', null, ['class' => 'form-control', 'placeholder' => __('Meta description')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Meta tags') }}
                    </label>
                    {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('Meta tags')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Titulo nos sites e portais') }}
                    </label>
                    {!! Form::text('andar', null, ['class' => 'form-control', 'placeholder' => __('Titulo nos sites e portais')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('Descrição nos sites e portais') }}
                    </label>
                    {!! Form::textarea('andar', null, ['class' => 'form-control', 'placeholder' => __('Descrição nos sites e portais')]) !!}
                </div>
            </div>
        </div>

    </div>
</div>