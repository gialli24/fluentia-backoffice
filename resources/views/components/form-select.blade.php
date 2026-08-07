<div class="fl-field mb-3 @error(''.$name) is-invalid @enderror">
    <label for={{ $name }} class="mb-1">{{$label}}</label>

    <div class="fl-input-wrap">
        <select id="{{ $name }}" name="{{ $name }}" autofocus>
            {{ $slot }}
        </select>
    </div>
</div>