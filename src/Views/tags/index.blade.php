@extends('real-estate::layouts.app')

@section('title', 'tags')

@section('content')	
<div class="content-body">
	<div class="container-fluid">
		<div class="form-head page-titles d-flex  align-items-center">
			<div class="mr-auto  d-lg-block">
				<h2 class="text-black font-w600">Tags</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Tags</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Lista</a></li>
				</ol>
			</div>
			<a href="{{ route('dashboard.tags.create') }}" class="btn btn-primary rounded light mr-3">Cadastrar</a>
		</div>
		<div class="row">
            <div class="col-12">
                @include('real-estate::tags.partials.list')
            </div>
        </div>
	</div>
</div>
@endsection  