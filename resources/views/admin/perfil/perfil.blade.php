@extends('layouts.app')
@section('content')        
<div class="container-fluid">
   <h1 class="ls-title-intro ls-ico-users">Meu perfil</h1>
   <div class="ls-box">
      <div class="ls-float-right ls-regroup">
         <a href="" class="ls-btn-primary" target="_blank">Acessar o Painel</a>
         <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
            <a href="#" class="ls-btn"></a>
            <ul class="ls-dropdown-nav">
               <li>
                  <a href="" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions">Editar</a>
               </li>
               <li><a href="#" data-ls-module="modal" data-target="#editPassword">Alterar senha</a></li>
               <li><a href="#">Desativar</a></li>
            </ul>
         </div>
      </div>
      <form action="" class="ls-form row" data-ls-module="form">
         <fieldset id="domain-form" class="ls-form-disable ls-form-text">
            <label class="ls-label col-md-6 col-lg-8">
            <b class="ls-label-text">Nome</b>
            <input type="text" value="{{ Auth::user()->name }}" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
            <b class="ls-label-text">login/E-mail:</b>
            <input type="text" value="{{ Auth::user()->email }}" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
            <b class="ls-label-text">Status:</b>
            <input type="text" value="{{ Auth::user()->tipo }}" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
            <b class="ls-label-text">Data de cadastro:</b>
            <input type="text" value="{{ Auth::user()->created_at->format('d/m/Y') }}" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
            <b class="ls-label-text">Informações:</b>
            <textarea name="" id="" cols="30" rows="5">com Fulano de Tal no telefone: 11 5555-5555. Horários entre 12:00 e 16:00 dias úteis.</textarea>
            </label>
         </fieldset>
         <div class="domain-actions ls-display-none">
            <button type="submit" class="ls-btn-primary">Salvar</button>
            <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
         </div>
      </form>
   </div>
   <!-- Modal de senha -->
   <div class="ls-modal" id="editPassword">
      <form action="#change-password" class="ls-form">
         <div class="ls-modal-small">
            <div class="ls-modal-header">
               <button data-dismiss="modal">×</button>
               <h4 class="ls-modal-title">Alterar senha</h4>
            </div>
            <div class="ls-modal-body">
               <label class="ls-label">
               <b class="ls-label-text">Senha *</b>
               <input type="password" required />
               </label>
               <label class="ls-label">
               <b class="ls-label-text">Confirmação de senha *</b>
               <input type="password" required />
               </label>
            </div>
            <div class="ls-modal-footer">
               <button type="submit" class="ls-btn-primary">Salvar</button>
               <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
         </div>
      </form>
   </div>
   <!-- Modal Adicionar envios -->
   <div class="ls-modal" id="addMessage">
      <form action="" class="ls-form">
         <div class="ls-modal-box">
            <div class="ls-modal-header">
               <button data-dismiss="modal">×</button>
               <h4 class="ls-modal-title">Adicionar envios avulsos</h4>
            </div>
            <div class="ls-modal-body ls-form-inline">
               <p>Os envios avulsos terão o mesmo prazo de expiração que os envios normais cadastrados para esse cliente. 07/05/2014</p>
               <p>
                  <strong>Saldo disponível da sua revenda</strong>
                  <span>889.239</span>
               </p>
               <hr>
               <label class="ls-label">
               <b class="ls-label-text">Quantidade de envios avulsos a adicionar</b>
               <input type="number" name="" required>
               </label>
            </div>
            <div class="ls-modal-footer">
               <button type="submit" class="ls-btn-primary">Adicionar</button>
               <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
         </div>
      </form>
   </div>
   <!-- Modal Remover envios -->
   <div class="ls-modal" id="removeMessage">
      <form action="" class="ls-form">
         <div class="ls-modal-box">
            <div class="ls-modal-header">
               <button data-dismiss="modal">×</button>
               <h4 class="ls-modal-title">Remover envios</h4>
            </div>
            <div class="ls-modal-body">
               <p>Os envios serão removidos automaticamente após esta ação.</p>
               <label class="ls-label">
               <b class="ls-label-text">Saldo disponível do cliente</b>
               <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
               </label>
               <label class="ls-label">
               <b class="ls-label-text">Disponível para remoção até 27/04/2014</b>
               <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
               </label>
               <label class="ls-label">
               <b class="ls-label-text">Quantidade de envios a remover</b>
               <input type="number" name="" required>
               </label>
            </div>
            <div class="ls-modal-footer">
               <button type="submit" class="ls-btn-primary">Remover</button>
               <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
         </div>
      </form>
   </div>
   <!-- Modal Alterar quantidade -->
   <div class="ls-modal" id="editAmount">
      <form action="" class="ls-form">
         <div class="ls-modal-box">
            <div class="ls-modal-header">
               <button data-dismiss="modal">×</button>
               <h4 class="ls-modal-title">Alterar quantidade de envios</h4>
            </div>
            <div class="ls-modal-body">
               <p>O novo valor só entrará em vigor após a data de 08/05/2014</p>
               <label class="ls-label">
               <b class="ls-label-text">Saldo disponível da sua revenda</b>
               <input type="number" disabled="disabled" readonly="readonly" name="" value="889.239" >
               </label>
               <label class="ls-label">
               <b class="ls-label-text">Quantidade de envios</b>
               <input type="number" name="" value="10" >
               </label>
            </div>
            <div class="ls-modal-footer">
               <button type="submit" class="ls-btn-primary">Alterar</button>
               <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
         </div>
      </form>
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
@endsection