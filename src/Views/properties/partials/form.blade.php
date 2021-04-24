{!! Form::hidden('accounts[]', $account->id?? null) !!}
<div class="row">
    <div class="col-8">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('code') }}
                                <span class="required"> * </span>
                            </label>
                            {!! Form::text('code', $property->code?? null, ['class' => 'form-control', 'placeholder' => __('Titulo')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('type') }}
                                <span class="required"> * </span>
                            </label>
                            {{ Form::select('type_id', $types, $property->type_id?? null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Titulo') }}
                                <span class="required"> * </span>
                            </label>
                            {!! Form::text('title', $property->title?? null, ['class' => 'form-control', 'placeholder' => __('Titulo')]) !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Slug') }}
                                <span class="required"> * </span>
                            </label>
                            {!! Form::text('slug', $property->slug?? null, ['class' => 'form-control', 'placeholder' => __('Slug')]) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('description') }}
                            </label>
                            {!! Form::textarea('description', $property->description?? null, ['class' => 'form-control', 'placeholder' => __('description')]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                {{ __('general_information') }}
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('usable_areas') }}
                            </label>
                            {!! Form::text('options[general][usable_areas]', $property->usable_areas?? null, ['class' => 'form-control', 'placeholder' => __('usable_areas')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('total_areas') }}
                            </label>
                            {!! Form::text('options[general][total_areas]', $property->usable_areas?? null, ['class' => 'form-control', 'placeholder' => __('total_areas')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('bedrooms') }}
                            </label>
                            {!! Form::text('options[general][bedrooms]', $property->bedrooms?? null, ['class' => 'form-control', 'placeholder' => __('bedrooms')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('bathrooms') }}
                            </label>
                            {!! Form::text('options[general][bathrooms]', $property->bathrooms?? null, ['class' => 'form-control', 'placeholder' => __('bathrooms')]) !!}
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('suites') }}
                            </label>
                            {!! Form::text('options[general][suites]', $property->suites?? null, ['class' => 'form-control', 'placeholder' => __('suites')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('parking_spaces') }}
                            </label>
                            {!! Form::text('options[general][parking_spaces]', $property->parking_spaces?? null, ['class' => 'form-control', 'placeholder' => __('parking_spaces')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('unit_floor') }}
                            </label>
                            {!! Form::text('options[general][unit_floor]', $property->unit_floor?? null, ['class' => 'form-control', 'placeholder' => __('unit_floor')]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                {{ __('prices') }}
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('price') }}
                            </label>
                            {!! Form::text('options[general][price]', $property->price?? null, ['class' => 'form-control money', 'placeholder' => __('price')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('monthly_condo_fee') }}
                            </label>
                            {!! Form::text('options[general][monthly_condo_fee]', $property->monthly_condo_fee?? null, ['class' => 'form-control money', 'placeholder' => __('monthly_condo_fee')]) !!}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('yearly_iptu') }}
                            </label>
                            {!! Form::text('options[general][yearly_iptu]', $property->yearly_iptu?? null, ['class' => 'form-control money', 'placeholder' => __('yearly_iptu')]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                {{ __('address') }}
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('CEP') }}
                            </label>
                            {!! Form::text('options[address][zip_code]', $property->zip_code?? null, ['class' => 'form-control cep', 'placeholder' => __('CEP')]) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Rua') }}
                            </label>
                            {!! Form::text('options[address][street]', $property->street?? null, ['class' => 'form-control', 'placeholder' => __('Rua')]) !!}
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Numero') }}
                            </label>
                            {!! Form::text('options[address][number]', $property->number?? null, ['class' => 'form-control', 'placeholder' => __('Numero')]) !!}
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Complemento') }}
                            </label>
                            {!! Form::text('options[address][complement]', $property->complement?? null, ['class' => 'form-control', 'placeholder' => __('Complemento')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Bairro') }}
                            </label>
                            {!! Form::text('options[address][district]', $property->district?? null, ['class' => 'form-control', 'placeholder' => __('Bairro')]) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Cidade') }}
                            </label>
                            {!! Form::text('options[address][city]', $property->city?? null, ['class' => 'form-control', 'placeholder' => __('Cidade')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Estado') }}
                            </label>
                            {!! Form::text('options[address][state]', $property->state?? null, ['class' => 'form-control', 'placeholder' => __('Estado')]) !!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Pais') }}
                            </label>
                            {!! Form::text('options[address][country]', $property->country?? null, ['class' => 'form-control', 'placeholder' => __('Pais')]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                {{ __('business') }}
            </div>
            <div class="card-body">
                @foreach($business as $business_k => $business_v)
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="sync[business][]" value="{{ $business_k }}" {{ (isset($property) && $property->business->contains($business_k))? 'checked' : '' }}>
                            </div>
                            <span class="input-group-text">{{ $business_v }}</span>
                            <span class="input-group-text">R$</span>
                        </div>
                        {!! Form::text('options[business][' . $business_k . '][price]', $property->businessOptions[$business_k]['price']?? null, ['class' => 'form-control money', 'placeholder' => __('price ' . $business_v)]) !!}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                {{ __('features') }}
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($features as $feature_k => $feature_v)
                        <div class="col-6">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sync[features][]" value="{{ $feature_k }}" {{ (isset($property) && $property->features->contains($feature_k))? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                                {{ $feature_v }}
                            </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12">

        <div class="card mt-4">
            <div class="card-header">
                {{ __('files') }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {!! Form::file('files[]', ['class' => 'form-control', 'placeholder' => __('Files'), 'multiple' => true]) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    @isset($property->files)
                        @foreach($property->files as $file)
                        <div class="col-2">
                            <img src="{{ url($file->url) }}" alt="..." class="img-thumbnail">
                        </div>
                        @endforeach
                    @endisset
                </div>

            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="text-right">
                    {!! Form::submit( __('save'), ['class' => 'btn btn-success']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $('.money').mask("#.##0,00", {reverse: true});
    $('.cep').mask('00000-000');
});
</script>
@endpush