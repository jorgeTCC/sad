@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <h1 class="ls-title-intro ls-ico-dashboard">Meu painel</h1>
   <div class="ls-box ls-board-box">
      <header class="ls-info-header">
         <p class="ls-float-right ls-float-none-xs ls-small-info">Valido até <strong>01.05.2014</strong></p>
         <h2 class="ls-title-3">Estatísticas do avaliador</h2>
      </header>
      <div id="sending-stats" class="row">
         <div class="col-sm-6 col-md-3">
            <div class="ls-box">
               <div class="ls-box-head">
                  <h6 class="ls-title-4">Empresas cadastradas</h6>
               </div>
               <div class="ls-box-body">
                  <span class="ls-board-data">
                  <strong>10</strong>
                  </span>
               </div>
               <div class="ls-box-footer">
                  <a href="#" class="ls-btn ls-btn-xs">Cadastrar</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-3">
            <div class="ls-box">
               <div class="ls-box-head">
                  <h6 class="ls-title-4">Total de departamentos</h6>
               </div>
               <div class="ls-box-body">
                  <span class="ls-board-data">
                  <strong>0</strong>
                  </span>
               </div>
               <div class="ls-box-footer">
                  <a href="#" class="ls-btn ls-btn-xs">Cadastrar</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-3">
            <div class="ls-box">
               <div class="ls-box-head">
                  <h6 class="ls-title-4">Total de colaboradores</h6>
               </div>
               <div class="ls-box-body">
                  <span class="ls-board-data">
                  <strong>10.743</strong>
                  </span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-3">
            <div class="ls-box">
               <div class="ls-box-head">
                  <h6 class="ls-title-4 color-default">Disponível</h6>
               </div>
               <div class="ls-box-body">
                  <span class="ls-board-data">
                  <strong class="ls-color-theme">81%</strong>
                  <small>989.257</small>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="ls-box">
            <header class="ls-info-header">
               <h2 class="ls-title-3">Gerenciar empresas</h2>
               <a href="#" class="ls-btn ls-btn-sm">Ver todas</a>
            </header>
            <table class="ls-table">
               <thead>
                  <th>Nome da empresa</th>
                  <th>Data de cadastro</th>
               </thead>
               <tbody>
                  <tr>
                     <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">CRECISP</a> </td>
                     <td>19/12/2017</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="col-md-6">
         <div class="ls-box">
            <header class="ls-info-header">
               <h2 class="ls-title-3">Avaliações de desempenho</h2>
               <a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-btn ls-btn-sm">Ver todos</a>
            </header>
            <table class="ls-table">
               <thead>
                  <th>Nome da avaliação</th>
                  <th>Status</th>

               </thead>
               <tbody>
                  <tr>
                     <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">Avaliação de desempenho 001</a> </td>
                     <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">Em andamento</a> </td>
                  </tr>
                  <tr>
                     <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">Avaliação de desempenho 001</a> </td>
                     <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">Em andamento</a> </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<footer class="ls-footer" role="contentinfo">
   <nav class="ls-footer-menu">
      <h2 class="ls-title-footer">suporte e ajuda</h2>
      <ul class="ls-footer-list">
         <li>
            <a href="#" target="_blank" class="bg-customer-support">
            <span class="visible-lg">Atendimento</span>
            </a>
         </li>
         <li>
            <a href="#" target="_blank" class="bg-my-tickets">
            <span class="visible-lg">Meus Chamados</span>
            </a>
         </li>
         <li>
            <a href="#" target="_blank" class="bg-help-desk">
            <span class="visible-lg">Central de Ajuda (Wiki)</span>
            </a>
         </li>
         <li>
            <a href="#" target="_blank" class="bg-statusblog">
            <span class="visible-lg">Statusblog</span>
            </a>
         </li>
      </ul>
   </nav>
   <div class="ls-footer-info">
      <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
      <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
      <p class="ls-copy-right">Copyright © 1997-2017 Serviços de Internet S/A.</p>
   </div>
</footer>
<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
               @endif
               You are logged in!
            </div>
         </div>
      </div>
   </div>
</div>
@endsection