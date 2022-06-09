@extends('real-estate::layouts.app')

@section('title', 'Novo Usuário')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Novo Usuário</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Usuários</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Novo Usuário</a></li>
				</ol>
			</div>
            <button onclick="document.getElementById('form-user').submit()" type="button" class="btn btn-success rounded mr-3">Salvar</button>
			<a href="{{ route('dashboard.users.index') }}" class="btn btn-warning rounded">Voltar</a>
		</div>
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Usuário</h4>
                    </div>
                    <div class="card-body">
					{!! Form::open(['route' => 'dashboard.users.store', 'class' => 'form-user', 'id' => 'form-user']) !!}
						@include('real-estate::users.partials.form')
					{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection 