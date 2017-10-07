@if($paragraph)
    <p id="{{ $name }}">{{ $field }}</p>
@else {{ $field }}
@endif
