<div class="fl-app-header">

    <div class="fl-breadcrumb">
        @foreach ($path as $el)
        <a href="{{ $el['url'] }}" class="fl-breadcrumb-item">{{ $el['name'] }}</a>
        @endforeach
    </div>

    <button class="fl-btn outline d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#main-sidebar"
        aria-controls="main-sidebar"><i class="bi bi-list"></i></button>

</div>
<!-- /.content-header -->