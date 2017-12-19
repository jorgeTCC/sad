<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="ls-theme-gray">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- Styles -->
   <link href="{{ asset('assets/stylesheets/locastyle.css') }}" rel="stylesheet">
   </head>
   <body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">
      <div class="ls-login-parent">
         <div class="ls-login-inner">
            <div class="ls-login-container">
               <div class="ls-login-box">
                  <h1 class="ls-login-logo"><img title="Logo login" src="http://opensource.locaweb.com.br/locawebstyle/assets/images/locastyle/logo-locaweb.png" /></h1>
                  @yield('content')
               </div>
               <div class="ls-login-adv"><img title="Exemplo banner" src="http://opensource.locaweb.com.br/locawebstyle/assets/images/banner-example.png" /></div>
            </div>
         </div>
      </div>
      <script src="{{ asset('assets/javascripts/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('assets/javascripts/locastyle.js') }}"></script>
   </body>
</html>