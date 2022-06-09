<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ __('localization') }}</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('zip_code') }}
                    </label>
                    {!! Form::text('localization[zip_code]', $localization->zip_code?? null, ['id' => 'zip_code', 'class' => 'form-control zip_code', 'placeholder' => __('zip_code')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('country') }}
                    </label>
                    {!! Form::select('localization[country_id]', $countries, NULL, ['id' => 'country', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('state') }}
                    </label>
                    {!! Form::select('localization[state_id]', [], NULL, ['id' => 'state', 'class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('city') }}
                    </label>
                    {!! Form::select('localization[city_id]', [], NULL, ['id' => 'city', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('district') }}
                    </label>
                    {!! Form::text('localization[district]', null, ['id' => 'district', 'class' => 'form-control', 'placeholder' => __('district')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('street') }}
                    </label>
                    {!! Form::text('localization[street]', $localization->street?? null, ['class' => 'form-control', 'placeholder' => __('Rua')]) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('number') }}
                    </label>
                    {!! Form::text('localization[number]', $localization->number?? null, ['class' => 'form-control', 'placeholder' => __('Numero')]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('complement') }}
                    </label>
                    {!! Form::text('localization[complement]', $localization->complement?? null, ['class' => 'form-control', 'placeholder' => __('Comp.')]) !!}
                </div>
            </div>   
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('ponto de referencia') }}
                    </label>
                    {!! Form::text('localization[reference_point]', $localization->reference_point?? null, ['class' => 'form-control', 'placeholder' => __('Ex.: Ao lado da igreja')]) !!}
                </div>
            </div>         
        </div> 
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label class="form-label">
                        {{ __('andar') }}
                    </label>
                    {!! Form::text('localization[floor]', $localization->floor?? null, ['class' => 'form-control', 'placeholder' => __('Andar')]) !!}
                </div>                
            </div>
            
        </div>
    </div>
</div>

@push('scripts')
<script>

$(document).ready(function() {

    function limpa_formulário_cep() {
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    function preenche_formulario(dados){
        console.log(dados);
        var estado_id = 0;
        var cidade_id = 0;
        var selectStateBox = $('#state');
        var selectCityBox = $('#city');
        var inputDistrictBox = $('#district');
        var inputStreetBox = $('#street');

        $.ajax({
            url: "{{ url('/') }}/api/states/1",
            async: false,
            dataType: 'json',
            success: function (states) {
                selectStateBox.find('option').remove();
                $.each(states['data'], function (i, s) {
                    var option = $('<option>').val(s.id).text(s.name).appendTo(selectStateBox);
                    if(s.code == dados.uf){
                        estado_id = s.id;
                        option.attr('selected', 'selected');
                    }
                });
                selectStateBox.selectpicker('refresh');
            }
        });

        $.ajax({
            url: "{{ url('/') }}/api/cities/" + estado_id,
            async: false,
            dataType: 'json',
            success: function (cities) {
                selectCityBox.find('option').remove();
                $.each(cities['data'], function (i, c) {
                    var option = $('<option>').val(c.id).text(c.name).appendTo(selectCityBox);
                    if(c.name == dados.localidade){
                        cidade_id = c.id;
                        option.attr('selected', 'selected');
                    }
                });
                selectCityBox.selectpicker('refresh');
            }
        });

        inputDistrictBox.val(dados.bairro);
        inputStreetBox.val(dados.logradouro);

        /*$.ajax({
            url: "{{ url('/') }}/api/districts/" + cidade_id,
            async: false,
            dataType: 'json',
            success: function (cities) {
                selectCityBox.find('option').remove();
                $.each(cities['data'], function (i, c) {
                    var option = $('<option>').val(c.id).text(c.name).appendTo(selectCityBox);
                    if(c.name == dados.localidade){
                        option.attr('selected', 'selected');
                    }
                });
                selectCityBox.selectpicker('refresh');
            }
        });*/

    }

    $("#zip_code").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if(validacep.test(cep)) {
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                    if (!("erro" in dados)) {
                        preenche_formulario(dados)
                    }else {
                        limpa_formulário_cep();
                    }
                });
            }else {
                limpa_formulário_cep();
            }
        }else {
            limpa_formulário_cep();
        }
    });
});

</script>
@endpush