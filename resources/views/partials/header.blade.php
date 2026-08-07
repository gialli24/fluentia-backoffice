<div class="fl-header navbar navbar-expand-lg">

    <div class="container py-4">

        <img src="{{ asset('img/logo.svg') }}" alt="Fluentia" class="fl-logo">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-end mt-4 mt-lg-0" id="mainNavbar">
            <nav class="d-flex flex-column flex-lg-row align-items-center gap-4" role="navigation">
                <a href="#" class="fl-nav-link">Cos'è Fluentia</a>
                <a href="#" class="fl-nav-link">Catalogo pubblico <i class="bi bi-box-arrow-up-right"></i></a>
                <a href="{{ route('login') }}" class="fl-btn outline">Accedi al backoffice</a>
            </nav>
        </div>

    </div>

</div>
<!-- /.app-header -->