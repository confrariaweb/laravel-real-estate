@extends('real-estate::layouts.auth')

@section('title', 'Olá, faça login aqui')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Seu Email" required autofocus>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Password</strong></label>
            <input type="password" class="form-control" name="password" placeholder="Sua senha" required>
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
                <div class="custom-control custom-checkbox ml-1">
                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1" name="remember">
                    <label class="custom-control-label" for="basic_checkbox_1">Lembre-se de mim</label>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Não tem uma conta? <a class="text-primary" href="{{ route('register') }}">Cadastre-se</a></p>
    </div>
@endsection