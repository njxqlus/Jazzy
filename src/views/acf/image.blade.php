@if($link)
    <a href="{{ wp_get_attachment_url($field) }}" id="{{ $name }}">{{ wp_get_attachment_image($field, $size) }}</a>
@else {{ wp_get_attachment_image($field, $size) }}
@endif
