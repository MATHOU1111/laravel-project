<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">E-commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Accueil</a>
            </li>
            <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('products.index') }}">Produits</a>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact.form') }}">Contact</a>
            </li>
            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Administration</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                    Panier <span class="badge badge-pill badge-dark">{{ count(session('cart', [])) }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
