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
            <li class="link-menu {{Route::current()->uri() == 'home' ? 'active' : null}}">
                <a href="{{ route('home') }} ">Home</a>
            </li>
            <li class="link-menu {{Route::current()->uri() == 'produtos' ? 'active' : null}}">
                <a href=" {{ route('products.index') }} ">Product</a>
            </li>
            <li class="link-menu {{Route::current()->uri() == 'clientes' ? 'active' : null}}">
                <a href="#">Client</a>
            </li>
            <li class="link-menu {{Route::current()->uri() == 'fonecedores' ? 'active' : null}}">
                <a href="#">Provider</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Financial</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="link-menu {{Route::current()->uri() == 'all' ? 'active' : null}}">
                        <a href="#">All</a>
                    </li>
                    <li class="link-menu {{Route::current()->uri() == 'get' ? 'active' : null}}">
                        <a href="#">Get</a>
                    </li>
                    <li class="link-menu {{Route::current()->uri() == 'pay' ? 'active' : null}}">
                        <a href="#">Pay</a>
                    </li>
                </ul>
            </li>
            <li class="link-menu {{Route::current()->uri() == 'contact' ? 'active' : null}}">
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<script src="{{ asset('js/sidebar.js') }}"></script>


