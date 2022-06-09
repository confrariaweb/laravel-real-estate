@extends('real-estate::layouts.app')

@section('title', 'Usuários')

@section('content')	

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head page-titles d-flex  align-items-center">
                <div class="mr-auto  d-lg-block">
                    <h2 class="text-black font-w600">Usuários</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Usuários</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Listagem</a></li>
                    </ol>
                </div>
                <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary rounded light mr-3">Cadastrar</a>
                <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary rounded"><i class="flaticon-381-settings-2 mr-0"></i></a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            @foreach($users as $user)
                            <div class="row border-bottom mx-0 pt-4 px-2 align-items-center ">
                                <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-12 mb-sm-4 mb-3 align-items-center  media">
                                    <img class="mr-sm-4 mr-3 img-fluid rounded" width="90" src="{{ $user->avatar }}" alt="DexignZone">
                                    <div class="media-body">
                                        
                                        <span class="text-primary d-block">{{ $user->status? 'Ativo' : 'Desativado' }}</span>
                                        <h3 class="fs-20 text-black font-w600 mb-1">{{ $user->name }}</h3>
                                        <span class="d-block mb-lg-0 mb-0">Criado em {{ $user->created_at? $user->created_at->format('d/m/Y') : '' }}</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3 text-lg-center">
                                    <small class="mb-2 d-block">Telefone</small>
                                    <span class="text-black font-w600">{{ $user->options->phone?? 'Sem telefone' }}</span>
                                </div>
                                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-4 mb-sm-4 mb-3">
                                    <small class="mb-2 d-block">E-mail</small>
                                    <span class="text-black font-w600">{{ $user->email }}</span>
                                </div>
                                <div class="col-xl-3 col-xxl-2 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3 text-right">
                                    <a href="{{ route('dashboard.users.show', $user->id) }}" class="btn tp-btn-light btn-info">Ver</a>
                                    <a href="{{ route('dashboard.users.edit', $user->id) }}" class="btn tp-btn-light btn-primary">Editar</a>
                                    <button onclick="document.getElementById('form-destroy-{{ $user->id }}').submit()" type="button" class="btn tp-btn-light btn-danger">Deletar</button>
                                    <form method="POST" action="{{ route('dashboard.users.destroy', $user->id) }}" id="form-destroy-{{ $user->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






























<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Usuários</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Usuários</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Lista</a></li>
				</ol>
			</div>
			<a href="{{ route('dashboard.users.create') }}" class="btn btn-primary rounded light mr-3">Cadastrar</a>
		</div>
		<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de usuários</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nome</th>
                                        <th>Status</th>
                                        <th>Criado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td><img src="{{ $user->avatar }}" width="60" alt=""/></td>
                                            <td>{{ $user->name }}</td>
                                            <td><span class="badge badge-{{ $user->status? 'primary' : 'danger' }}">{{ $user->status? 'Ativo' : 'Desativado' }}</span></td>
                                            <td class="color-primary">{{ $user->created_at? $user->created_at->format('d/m/Y') : '' }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('dashboard.users.show', $user->id) }}" class="btn btn-sm tp-btn-light btn-info">Ver</a>
                                                <a href="{{ route('dashboard.users.edit', $user->id) }}" class="btn btn-sm tp-btn-light btn-primary">Editar</a>
                                                <button onclick="document.getElementById('form-destroy-{{ $user->id }}').submit()" type="button" class="btn btn-sm tp-btn-light btn-danger">Deletar</button>
                                                <form method="POST" action="{{ route('dashboard.users.destroy', $user->id) }}" id="form-destroy-{{ $user->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection 