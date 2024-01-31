<nav class="navbar navbar-expand px-0 px-xl-5 pb-0 bg-primary-subtle">
    <div class="container-fluid flex-column flex-md-row mt-2">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" width="250" height="50"
                class="d-inline-block align-text-top">
        </a>
        <h1 class="ff-primary fst-italic fw-bolder fs-4 text-center  d-none d-md-block">
            {{ __('site.owner') }}
        </h1>
        <ul class="navbar-nav">
            <li class="nav-item px-xl-5">
                <a @class(['nav-link', 'active' => request()->routeIs('home')]) aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item px-xl-5">
                <a @class(['nav-link', 'active' => request()->routeIs('contact')]) href="contact">Contato</a>
            </li>
            <li class="nav-item px-xl-5">
                <a @class(['nav-link', 'active' => request()->routeIs('about')]) href="about">Sobre</a>
            </li>
            <li class="nav-item px-xl-5">
                <a @class(['nav-link', 'active' => request()->routeIs('products')]) href="products">Produtos</a>
            </li>
        </ul>
    </div>
</nav>
