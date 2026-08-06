<div class="app-header navbar navbar-expand-lg">
    <div class="container py-4">

        <img src="{{ asset('img/logo.svg') }}" alt="Fluentia">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <nav class="d-flex align-items-center gap-4" role="navigation">
                <a href="#" class="nav-link">Cos'è Fluentia</a>
                <a href="#" class="nav-link">Catalogo pubblico <i class="bi bi-box-arrow-up-right"></i></a>
                <a href="{{ route('login') }}" class="btn outline">Accedi al backoffice</a>
            </nav>
        </div>

    </div>
</div>
<!-- /.app-header -->