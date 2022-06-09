@extends('real-estate::layouts.auth')

@section('title', 'Esqueceu sua senha?')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label><strong>Email</strong></label>
            <input type="email" class="form-control" placeholder="Seu Email">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </div>
    </form>
@endsection
