@extends('real-estate::layouts.auth')

@section('title', 'Cadastre-se, é muito simples')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label class="mb-1"><strong>Nome</strong></label>
            <input type="text" class="form-control" placeholder="Seu Nome" name="name" value="{{ old('name') }}" required autofocus>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" class="form-control" placeholder="Seu Email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Senha</strong></label>
            <input type="password" class="form-control" placeholder="Sua senha" name="password" required>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Confirme a senha</strong></label>
            <input type="password" class="form-control" placeholder="Confirme a senha" name="password_confirmation" required>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block">Inscreva-me</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>já tem uma conta? <a class="text-primary" href="{{ route('login') }}">Login</a></p>
    </div>
@endsection