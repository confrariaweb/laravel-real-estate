@extends('real-estate::layouts.app')

@section('title', 'Novo Site')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Novo Site</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Sites</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Novo Site</a></li>
				</ol>
			</div>
            <button onclick="document.getElementById('form-site').submit()" type="button" class="btn btn-success rounded mr-3">Salvar</button>
			<a href="{{ route('dashboard.sites.index') }}" class="btn btn-warning rounded">Voltar</a>
		</div>
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Site</h4>
                    </div>
                    <div class="card-body">
					{!! Form::open(['route' => 'dashboard.sites.store', 'class' => 'form-site', 'id' => 'form-site']) !!}
						@include('real-estate::sites.partials.form')
					{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection 