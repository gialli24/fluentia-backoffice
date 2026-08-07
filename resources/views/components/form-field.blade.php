<div class="fl-field mb-3 @error(''.$name) is-invalid @enderror">
    <label for={{ $name }} class="mb-1">{{$label}}</label>

    <div class="fl-input-wrap">
        @if (isset($icon) && trim($icon) !== '')
        <i class="bi bi-{{ $icon }}"></i>
        @endif

        <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" value="{{ old( ''.$name )  }}" {{
            isset($autocomplete) && trim($autocomplete) !=='' ? 'autocomplete="' . $autocomplete .'"' : '' }} autofocus
            placeholder="{{ $placeholder }}" required>
    </div>

    {{$slot}}
</div>