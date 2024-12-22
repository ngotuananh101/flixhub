@props([
    'message' => null,
    'type' => 'success',
])

@if ($message)
    <span class="input-{{ $type }} text-xs">
        {{ $message }}
    </span>
@endif
