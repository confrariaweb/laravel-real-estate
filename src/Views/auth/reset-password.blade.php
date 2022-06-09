@extends('user::auth.iofrm.layouts.app18')

@section('title', 'Redefinição de senha')

@section('content')
        <h3>Redefinição de senha</h3>
        <p>Para redefinir sua senha, digite o endereço de e-mail que você usa para fazer login</p>
        @include('user::auth.iofrm.partials.message')
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input class="form-control" type="hidden" name="token" value="{{ $request->route('token') }}">
            <input class="form-control" type="text" name="email" placeholder="Seu e-mail" value="{{ old('email', $request->email) }}" required autofocus>
            <input class="form-control" type="password" name="password" placeholder="Sua senha" required>
            <input class="form-control" type="password" name="password_confirmation" placeholder="confirme a senha" required>
            <div class="form-button full-width">
                <button id="submit" type="submit" class="ibtn ">Redefinir a senha</button>
            </div>
        </form>
@endsection
