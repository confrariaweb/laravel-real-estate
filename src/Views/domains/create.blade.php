@extends('real-estate::layouts.app')

@section('title', 'Novo Domínio')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Novo Domínio</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Domínios</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Novo Domínio</a></li>
				</ol>
			</div>
            <button onclick="document.getElementById('form-domain').submit()" type="button" class="btn btn-success rounded mr-3">Salvar</button>
			<a href="{{ route('dashboard.domains.index') }}" class="btn btn-warning rounded">Voltar</a>
		</div>
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Domínio</h4>
                    </div>
                    <div class="card-body">
					{!! Form::open(['route' => 'dashboard.domains.store', 'class' => 'form-domain', 'id' => 'form-domain']) !!}
						@include('real-estate::domains.partials.form')
					{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection 