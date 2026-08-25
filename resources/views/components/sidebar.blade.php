<div class="offcanvas-lg offcanvas-start" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="main-sidebar"
    aria-labelledby="offcanvasScrollingLabel">

    <div class="fl-sidebar">

        <div class="mb-4">
            <img src="{{ asset('img/logo.svg') }}" alt="Fluentia logo" class="site-logo">
        </div>

        <nav>
            <div class="fl-sidebar-group">
                <h4>Generale</h4>

                <a href="{{ route('dashboard') }}"
                    class="fl-sidebar-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-bar-chart me-2"></i>
                    Dashboard
                </a>
            </div>

            <div class="fl-sidebar-group">
                <h4>Archivio</h4>

                <a href="{{ url('/prompts') }}" class="fl-sidebar-link {{ Request::is('prompts') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text me-2"></i>
                    Prompt
                </a>

                <a href="{{ url('/categories') }}"
                    class="fl-sidebar-link {{ Request::is('categories') ? 'active' : '' }}">
                    <i class="bi bi-folder me-2"></i>
                    Categorie
                </a>

                <a href="{{ url('/ai-models') }}"
                    class="fl-sidebar-link {{ Request::is('ai-models') ? 'active' : '' }}">
                    <i class="bi bi-cpu me-2"></i>
                    Modelli AI
                </a>
            </div>

            <div class="fl-sidebar-group">
                <h4>Altro</h4>

                <a href="" class="fl-sidebar-link">
                    <i class="bi bi-gear me-2"></i>
                    Impostazioni
                </a>

                <a href="http://localhost:5173/prompts" class="fl-sidebar-link">
                    <i class="bi bi-box-arrow-up-right me-2"></i>
                    Catalogo pubblico
                </a>
            </div>
        </nav>

        <div class="fl-spacer"></div>

        <a href="{{ route('logout') }}" class="fl-cta">
            <div class="d-flex flex-column justify-content-center">
                <h5 class="fl-cta-title">{{ Auth::user()->name }}</h5>
                <p class="fl-cta-text">{{ Auth::user()->email }}</p>
            </div>

            <div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="fl-btn sm outline">
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </div>
        </a>

    </div>
    <!-- /.app-sidebar -->

</div>