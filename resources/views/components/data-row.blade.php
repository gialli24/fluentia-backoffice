<div class="fl-data-row d-flex justify-content-between align-items-center">
    <div class="d-flex aling-items-center gap-2">

        @foreach ($prompt->ai_models as $ai_model)
        <x-badge>
            <x-slot:class>square</x-slot:class>
            <x-slot:color>{{$ai_model->color}}</x-slot:color>
        </x-badge>
        @endforeach

        <div class="info d-flex flex-column gap-0">
            <h4 class="m-0">Refactor componente React</h4>
            <span>
                @foreach ($prompt->categories as $category)
                {{ $category->name }}
                @endforeach

                -

                @foreach ($prompt->ai_models as $ai_model)
                {{ $ai_model->name }}
                @endforeach
            </span>
        </div>

    </div>

    <div class="d-flex flex-column gap-0">
        <span class="fl-data-row-time">{{ $prompt->created_at->diffForHumans() }}</span>
        <span class="fl-data-row-copy-count d-flex align-items-center justify-content-end gap-1">
            <i class="bi bi-caret-down-fill"></i> {{ $prompt->copy_count }}
        </span>
    </div>
</div>