<div class="fl-field mb-3 @error(''.$name) is-invalid @enderror">
    <label for={{ $name }} class="mb-1">{{$label}}</label>

    <div class="fl-input-wrap">
        <textarea id="{{ $name }}" name="{{ $name }}" autofocus
            placeholder="{{ $placeholder }}">{{ old(''.$name, $value ?? '') }}</textarea>
    </div>

    {{$slot}}
</div>