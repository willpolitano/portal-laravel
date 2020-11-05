<link rel="stylesheet" href={{ asset('css/sidebar.css') }}>

<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <div class="p-4 pt-5">
        <h1><a href="index.html" class="logo">Splash</a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="link-menu {{ Route::current()->uri() == 'home' ? 'active' : null }} ">
                <a href="{{ route('home') }} "><i class="fa fa-home fa-sidebar"></i> Home</a>
            </li>
            <li class="link-menu {{ Route::current()->uri() == 'produtos' ? 'active' : null }} ">
                <a href=" {{ route('products.index') }} "><i class="fa fa-tasks fa-sidebar"></i> Product</a>
            </li>
            <li class="link-menu {{ Route::current()->uri() == 'clientes' ? 'active' : null }} ">
                <a href=" {{ route('clients.index') }} "> <i class="fa fa-address-card fa-sidebar"></i> Client</a>
            </li>
            <li class="link-menu {{ Route::current()->uri() == 'compras' ? 'active' : null }} ">
                <a href=" {{ route('shoppings.index') }} "><i class="fa fa-shopping-cart fa-sidebar"></i> Shopping</a>
            </li>
            <li class="link-menu {{ Route::current()->uri() == 'fornecedores' ? 'active' : null }} ">
                <a href=" {{ route('providers.index') }} "><i class="fa fa-truck fa-sidebar"></i> Provider</a>
            </li>
            <li>
                <a href="#subMenuFinancial" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-usd fa-sidebar"></i> Financial</a>
                <ul class="collapse list-unstyled" id="subMenuFinancial">
                    <li class="link-menu {{ Route::current()->uri() == 'financeiro' ? 'active' : null }} ">
                        <a href=" {{ route('financials.index') }}"><i class="fa fa-usd fa-sidebar"></i> All</a>
                    </li>
                    <li class="link-menu {{ Route::current()->uri() == 'get' ? 'active' : null }} ">
                        <a href="#"><i class="fa fa-usd fa-sidebar"></i> Get</a>
                    </li>
                    <li class="link-menu {{ Route::current()->uri() == 'pay' ? 'active' : null }} ">
                        <a href="#"><i class="fa fa-usd fa-sidebar"></i> Pay</a>
                    </li>
                </ul>
            </li>
            <li class="link-menu {{ Route::current()->uri() == 'contact' ? 'active' : null }} ">
                <a href="#"><i class="fa fa-users fa-sidebar"></i> Contact</a>
            </li>
            <li>
                <a href="#subMenuConfig" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-cog fa-sidebar"></i> Config</a>
                <ul class="collapse list-unstyled" id="subMenuConfig">
                    <li class="link-menu {{ Route::current()->uri() == 'logout' ? 'active' : null }} ">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                                href="#"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"
                            >
                                <i class="fa fa-sign-out fa-sidebar"></i> Logout
                            </a>
                        </form>
                    </li>
                    <li class="link-menu {{ Route::current()->uri() == 'logout' ? 'active' : null }} ">
                        <a href="{{ route('profile.show') }}"><i class="fa fa-user-circle fa-sidebar"></i> Profile</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script src="{{ asset('js/sidebar.js') }}"></script>


