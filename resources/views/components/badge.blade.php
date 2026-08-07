<div class="fl-badge {{ isset($class) ? $class : "" }}">
    @if(isset($icon) && trim($icon) !== '')
    <i class="bi bi-{{ $icon }}"></i>
    @else
    <div class="dot" style="background-color: {{ isset($color) ? $color : '#999' }}"></div>
    @endif
    {{ isset($slot) ? $slot : "" }}
</div>