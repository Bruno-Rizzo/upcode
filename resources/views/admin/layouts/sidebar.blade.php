<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div id="sidebar-menu">
            
            <ul class="metismenu list-unstyled" id="side-menu">
                
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                @can('view', App\Models\User::class)

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Autenticação</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('users.index')}}">Usuários</a></li>
                        <li><a href="{{route('roles.index')}}">Funções</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-terminal-box-line"></i>
                        <span>Configurações</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('settings.password')}}">Alterar Senha</a></li>
                    </ul>
                </li>

                @endcan

            </ul>

        </div>
        
    </div>

</div>