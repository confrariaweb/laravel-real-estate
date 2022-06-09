@extends('real-estate::layouts.app')

@section('title', 'tags')

@section('content')	
	<div class="content-body">
		<div class="container-fluid">
			<div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
				<div class="mr-auto  d-lg-block">
					<h2 class="text-black font-w600">Tags</h2>
					<p class="mb-0">Nova tag</p>
				</div>
				<a href="javascript:void(0);" class="btn btn-primary rounded">Novo</a>
			</div>
			<div class="row">
				<div class="col-12">
				@include('real-estate::partials.messages')
				{!! Form::open(['route' => 'dashboard.tags.store', 'class' => 'property-form', 'id' => 'tag-form']) !!}
					@include('real-estate::tags.partials.form')
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection  