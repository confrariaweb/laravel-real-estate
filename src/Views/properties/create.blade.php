<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Properties') }}
                </h2>
            </div>
            <div class="col-6 text-right">
                <div class="btn-group btn-sm" role="group" aria-label="Basic">
                    <a href="{{ route('dashboard.properties.create') }}" class="btn btn-sm btn-primary">Novo</a>
                    <button type="button" class="btn btn-sm btn-success">Salvar</button>
                    <a href="{{ route('dashboard.properties.index') }}" class="btn btn-sm btn-warning">Voltar</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['route' => 'dashboard.properties.store', 'class' => 'property-form', 'id' => 'property-form', 'files' => true]) !!}
                        @include('real-estate::properties.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>