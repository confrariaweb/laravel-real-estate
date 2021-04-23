{!! Form::hidden('accounts[]', isset($account) ? $account->id  : null) !!}
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">
                {{ __('Titulo') }}
                <span class="required"> * </span>
            </label>
            {!! Form::text('title', isset($property->title) ? $property->title : null, ['class' => 'form-control', 'placeholder' => __('Titulo')]) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">
                {{ __('Slug') }}
                <span class="required"> * </span>
            </label>
            {!! Form::text('slug', isset($property->slug) ? $property->slug : null, ['class' => 'form-control', 'placeholder' => __('Slug')]) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">
                {{ __('Type') }}
                <span class="required"> * </span>
            </label>
            {{ Form::select('type_id', $types, isset($property->type_id) ? $property->type_id : null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">
                {{ __('Features') }}
            </label>
            {{ Form::select('sync[features][]', $features, isset($property->features) ? $property->features()->pluck('id') : null, ['class' => 'form-control', 'multiple' => true]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label">
                {{ __('Files') }}
                <span class="required"> * </span>
            </label>
            {!! Form::file('files[]', ['class' => 'form-control', 'placeholder' => __('Files'), 'multiple' => true]) !!}
        </div>
    </div>
</div>
<div class="row">
    @isset($property->files)
        @foreach($property->files as $file)
        <div class="col-2">
            <img src="{{ url('image/resize/300/300' . $file->url) }}" alt="..." class="img-thumbnail">
        </div>
        @endforeach
    @endisset
</div>

<div class="row">
    <div class="col-12 text-right">
        <div class="form-group">
            {!! Form::submit(__('Save'), ['class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>