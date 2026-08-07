<div class="fl-field mb-3">

    <div class="d-flex align-items-center">
        <input type="checkbox" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" {{ isset($checked) ? 'checked'
            : '' }}>
        <label for="{{ $id }}" class="fl-checkbox-badge ms-2">
            @if(isset($icon) && trim($icon) !== '')
            <i class="bi bi-{{ $icon }}"></i>
            @elseif(isset($color) && trim($color) !== '')
            <span class="dot" style="background-color: {{ $color }}"></span>
            @endif
            {{ $label }}
        </label>
    </div>

</div>