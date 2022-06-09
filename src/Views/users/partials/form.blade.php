<div class="row">
    <div class="col-8">
        <div class="form-group">
            <label class="control-label">Nome <span class="required"> * </span></label>
            {!! Form::text('name', isset($user) ? $user->name : null, ['class' => 'form-control', 'placeholder' => 'Digite o nome', 'required']) !!}
        </div>
    </div>
    <div class="col-4">    
        <div class="form-group">
            <label class="control-label">Status <span class="required"> * </span></label>
            {!! Form::select('status', [1 => 'Ativo', 0 => 'Desativado'], isset($user) ? $user->status : null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="form-group">
            <label class="control-label">Email <span class="required"> * </span></label>
            {!! Form::text('email', isset($user) ? $user->email : null, ['class' => 'form-control', 'placeholder' => 'Digite o email', 'required']) !!}
        </div>
    </div>
    <div class="col-4">    
        <div class="form-group">
            <label class="control-label">Perfil <span class="required"> * </span></label>
            {!! Form::select('roles[]', $roles, isset($user) ? $user->roles : null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>
