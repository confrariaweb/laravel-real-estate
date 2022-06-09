@extends('real-estate::layouts.app')

@section('title', 'Domínio')

@section('content')	
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Domínio</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Domínios</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Domínio</a></li>
				</ol>
			</div>
			<a href="{{ route('dashboard.domains.index') }}" class="btn btn-warning rounded">Voltar</a>
		</div>
		<div class="row">
            <div class="col-12">
                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Domínio</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informações Ns's</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        @foreach($zone->name_servers as $name_server_key => $name_server)
                            <li>{{ $name_server_key }} - {{ $name_server }}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>
@endsection 