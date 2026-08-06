<div class="fl-card">

    <div class="d-flex flex-wrap gap-2">
        @foreach ($prompt->ai_models as $ai_model)
        <x-badge>
            <x-slot:color>{{ $ai_model->color }}</x-slot:color>
            {{ $ai_model->name }}
        </x-badge>
        @endforeach
    </div>

    <h4 class="fl-card-title">{{ $prompt->title }}</h4>

    @if ($prompt->thumbnail)
    <img src="{{ asset('storage/'.$prompt->thumbnail) }}" alt="">
    @endif

    <p class="fl-card-description">{{ $prompt->description }}</p>

    <hr class="divisor">

    <div class="meta d-flex align-items-center justify-content-between">
        <span>output: {{ $prompt->output_type }}</span>
        <span>
            <i class="bi bi-caret-down-fill"></i>
            {{ $prompt->copy_count }}
        </span>
    </div>
</div>