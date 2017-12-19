@extends('layouts.acesso')
@section('content')        
<form role="form" class="ls-form ls-login-form" method="POST" action="{{ route('login') }}">
   {{ csrf_field() }}
   <label class="ls-label">
   <b class="ls-label-text ls-hidden-accessible {{ $errors->has('email') ? ' has-error' : '' }}">Usuário</b>    
   <input id="email" type="email" class="ls-login-bg-user ls-field-lg" name="email" value="{{ old('email') }}" placeholder="Endereço de e-mail" required autofocus>
   @if ($errors->has('email'))
   <span class="help-block">
   <strong>{{ $errors->first('email') }}</strong>
   </span>
   @endif
   </label>
   <label class="ls-label">
      <b class="ls-label-text ls-hidden-accessible {{ $errors->has('password') ? ' has-error' : '' }}">Usuário</b>
      <div class="ls-prefix-group ls-field-lg">
         <input id="password" class="ls-login-bg-password" type="password" placeholder="Senha" name="password" required>
         <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password" href="#"></a>
         @if ($errors->has('password'))
         <span class="help-block">
         <strong>{{ $errors->first('password') }}</strong>
         </span>
         @endif
      </div>
   </label>
   <p><a class="ls-login-forgot" href="{{ route('password.request') }}">Esqueci minha senha</a></p>
   <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">
   <label class="ls-label">
   <label class="ls-label-text">
   <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
   </label>
   </label>
</form>
@endsection