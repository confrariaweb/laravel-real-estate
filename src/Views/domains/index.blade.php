@extends('real-estate::layouts.app')

@section('title', 'Domínios')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Domínios</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Domínios</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Lista</a></li>
				</ol>
			</div>
			<a href="{{ route('dashboard.domains.create') }}" class="btn btn-primary rounded light mr-3">Cadastrar</a>
		</div>
		<div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista dos meus domínios</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Domínio</th>
                                        <th>Status</th>
                                        <th>Criado por</th>
                                        <th>Data</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($domains as $domain)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $domain->domain }}</td>
                                            <td><span class="badge badge-{{ $domain->status? 'primary' : 'danger' }}">{{ $domain->status? 'Ativo' : 'Desativado' }}</span></td>
                                            <td>{{ $domain->user->name }}</td>
                                            <td class="color-primary">{{ $domain->created_at? $domain->created_at->format('d/m/Y') : '' }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('dashboard.domains.show', $domain->id) }}" class="btn btn-sm tp-btn-light btn-info">Ver</a>
                                                <a href="{{ route('dashboard.domains.edit', $domain->id) }}" class="btn btn-sm tp-btn-light btn-primary">Editar</a>
                                                <button onclick="document.getElementById('form-destroy-{{ $domain->id }}').submit()" type="button" class="btn btn-sm tp-btn-light btn-danger">Deletar</button>
                                                <form method="POST" action="{{ route('dashboard.domains.destroy', $domain->id) }}" id="form-destroy-{{ $domain->id }}">
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