<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow ai-icon" href="{{ route('dashboard.index') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">CRM</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Leads</a></li>
                    <li><a href="#">Funil de vendas</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Contatos</a></li>
                    <li><a href="#">Oportunidades</a></li>
                    <li><a href="#">propostas</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Marketing Digital</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Campanhas</a></li>
                    <li><a href="#">Nova campanha</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Propriedades</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.properties.index') }}">Imóveis</a></li>
                    <li><a href="{{ route('dashboard.properties.create') }}">Cadastrar</a></li>
                    <li><a href="#">Empreendimentos</a></li>
                    <li><a href="#">Condomínios</a></li>
                    <li><a href="#">Tipos</a></li>
                    <li><a href="#">Caracteristicas</a></li>
                    <li><a href="#">Negócio</a></li>
                    <li><a href="#">Proprietários</a></li>
                    <li><a href="#">Pessoas</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Sites</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.sites.index') }}">Sites</a></li>
                    <li><a href="{{ route('dashboard.domains.index') }}">Dominios</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Configurações</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.users.index') }}">Usuários</a></li>
                    <li><a href="#">Integração</a></li>
                    <li><a href="#">Pagamentos</a></li>
                    <li><a href="#">Planos</a></li>
                    <li><a href="#">Notificações</a></li>
                    <li><a href="#">Histórico</a></li>
                    <li><a href="{{ route('dashboard.tags.index') }}">Etiquetas</a></li>
                    <li><a href="#">Origens</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="copyright">
            <p><strong>Confraria Imob</strong> </p>
            <p>©All Rights Reserved</p>
            <p>by Confraria Web</p>
        </div>
    </div>
</div>