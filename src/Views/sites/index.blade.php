@extends('real-estate::layouts.app')

@section('title', 'Sites')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Sites</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Sites</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Listagem</a></li>
				</ol>
			</div>
			<a href="{{ route('dashboard.sites.create') }}" class="btn btn-primary rounded light mr-3">Cadastrar</a>
		</div>
		<div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Meus Sites</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Site</th>
                                        <th>Status</th>
                                        <th>Criado por</th>
                                        <th>Data</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sites as $site)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $site->title }}</td>
                                            <td><span class="badge badge-{{ $site->status? 'primary' : 'danger' }}">{{ $site->status? 'Ativo' : 'Desativado' }}</span></td>
                                            <td>{{ $site->user->name }}</td>
                                            <td class="color-primary">{{ $site->created_at? $site->created_at->format('d/m/Y') : '' }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('dashboard.sites.show', $site->id) }}" class="btn btn-sm tp-btn-light btn-info">Ver</a>
                                                <a href="{{ route('dashboard.sites.edit', $site->id) }}" class="btn btn-sm tp-btn-light btn-primary">Editar</a>
                                                <button onclick="document.getElementById('form-destroy-{{ $site->id }}').submit()" type="button" class="btn btn-sm tp-btn-light btn-danger">Deletar</button>
                                                <form method="POST" action="{{ route('dashboard.sites.destroy', $site->id) }}" id="form-destroy-{{ $site->id }}">
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