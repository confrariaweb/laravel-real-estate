@extends('real-estate::layouts.app')

@section('title', 'Propriedades')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Propriedades</h2>
				<p class="mb-0">Atualizarpropriedade</p>
			</div>
			<a href="javascript:void(0);" class="btn btn-primary rounded mr-3" onclick="document.getElementById('property-form').submit();">Salvar</a>
			<a href="{{ route('dashboard.properties.index') }}" class="btn btn-warning rounded">Cancelar</a>
		</div>
		<div class="row">
            <div class="col-12">
			@include('real-estate::partials.messages')
            {!! Form::model($property, ['route' => ['dashboard.properties.update', $property->id], 'method' => 'put', 'id' => 'property-form', 'class' => 'property-form', 'files' => true]) !!}
                        @include('real-estate::properties.partials.form')
            {!! Form::close() !!}
            </div>
        </div>
	</div>
</div>
@endsection  