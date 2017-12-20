<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="ls-theme-blue ls-html-nobg">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel1.png">
      <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel1.png">
      <meta name="apple-mobile-web-app-title" content="Painel 1">
      <script src="http://opensource.locaweb.com.br/locawebstyle/assets/javascripts/libs/mediaqueries-ie.js" type="text/javascript"></script>
      <script src="http://opensource.locaweb.com.br/locawebstyle/assets/javascripts/libs/html5shiv.js" type="text/javascript"></script>
      <link href="{{ asset('assets/stylesheets/locastyle.css') }}" rel="stylesheet">
   </head>
   <body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_home documentacao_exemplos_painel1_home_index">
      <div class="ls-topbar ">
         <!-- Barra de Notificações -->
         <div class="ls-notification-topbar">
            <!-- Links de apoio -->
            <div class="ls-alerts-list">
               <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
               <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
               <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
            </div>
            <!-- Dropdown com detalhes da conta de usuário -->
            <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
               <a href="#" class="ls-ico-user">
               <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
               <span class="ls-name">{{ Auth::user()->name }}</span>
               </a>
               <nav class="ls-dropdown-nav ls-user-menu">
                  <ul>
                     <li><a href="{{ route('/admin/meu-perfil') }}">Meus dados</a></li>
                     <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <span class="ls-show-sidebar ls-ico-menu"></span>
         <a href="/locawebstyle/documentacao/exemplos/painel1/pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>
         <!-- Nome do produto/marca com sidebar -->
         <h1 class="ls-brand-name">
            <a href="home" class="ls-ico-chart-bar-up">
            <small>Skill performance evaluation</small>
            Avaliação de desempenho
            </a>
         </h1>
         <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
      </div>
      <aside class="ls-sidebar">
         <div class="ls-sidebar-inner">
            <a href="/locawebstyle/documentacao/exemplos/painel1/pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>
            <nav class="ls-menu">
               <ul>
                  <li><a href="/locawebstyle/documentacao/exemplos/painel1/home" class="ls-ico-dashboard" title="Meu painel">Meu painel</a></li>
                  <li><a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-ico-users" title="Clientes">Clientes</a></li>
                  <li><a href="/locawebstyle/documentacao/exemplos/painel1/stats" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
                  <li>
                     <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
                     <ul>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Domínios da Revenda</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Aparência</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer">Atendimento</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api">Chave de acesso para API</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
      <main class="ls-main ">
         @yield('content')
         @if(Auth::user()->tipo == 'Administrador')
         //LIBERE ALGUMA PAGINA
         @endif
      </main>
      <aside class="ls-notification">
         <nav class="ls-notification-list" id="ls-notification-curtain">
            <h3 class="ls-title-2">Notificações</h3>
            <ul>
               <li class="ls-dismissable">
                  <a href="#">Aut ex quia et et aut necessitatibus hic dolores consequatur quis</a>
                  <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
               </li>
               <li class="ls-dismissable">
                  <a href="#">Quis et sapiente quis in nihil alias repellat id et voluptatem quis unde omnis</a>
                  <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
               </li>
               <li class="ls-dismissable">
                  <a href="#">Eius labore numquam facere et voluptates quis quo dolorem</a>
                  <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
               </li>
               <li class="ls-dismissable">
                  <a href="#">In maiores deleniti officia sed et et totam perspiciatis iste ea ex nihil</a>
                  <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
               </li>
               <li class="ls-dismissable">
                  <a href="#">Odit repellendus ut quibusdam similique impedit</a>
                  <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
               </li>
            </ul>
            <p class="ls-no-notification-message">Não há notificações.</p>
         </nav>
         <nav class="ls-notification-list" id="ls-help-curtain">
            <h3 class="ls-title-2">Feedback</h3>
            <ul>
               <li><a href="#">> sit sequi explicabo totam unde eos</a></li>
               <li><a href="#">> facere modi sed fugit fugiat explicabo</a></li>
            </ul>
         </nav>
         <nav class="ls-notification-list" id="ls-feedback-curtain">
            <h3 class="ls-title-2">Ajuda</h3>
            <ul>
               <li class="ls-txt-center hidden-xs">
                  <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
               </li>
               <li><a href="#">> Guia</a></li>
               <li><a href="#">> Wiki</a></li>
            </ul>
         </nav>
      </aside>
      <script src="http://opensource.locaweb.com.br/locawebstyle/assets/javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
      <script src="http://opensource.locaweb.com.br/locawebstyle/assets/javascripts/example.js" type="text/javascript"></script>
      <script src="{{ asset('assets/javascripts/locastyle.js') }}"></script>
      <script src="//code.highcharts.com/highcharts.js" type="text/javascript"></script>
      <script src="http://opensource.locaweb.com.br/locawebstyle/assets/javascripts/docs/panel-charts.js" type="text/javascript"></script>
      <script type="text/javascript">
         $(window).on('load', function() {
           locastyle.browserUnsupportedBar.init();
         });
      </script>
   </body>
</html>