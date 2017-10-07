@php($count = 0)
<ul id="{{ $name }}-gallery">
    @foreach($fields as $field)
        @php
            $count ++;
            $caption_text = null;
        @endphp
        @if($caption)
            @php($caption_text = $field['caption'])
        @endif
        <li class="item">
            @if($link)
                <a href="{{ wp_get_attachment_url($field['ID']) }}"
                   id="{{ $name }}-{{ $count }}">{{ wp_get_attachment_image($field['ID'], $size) }}{{ $caption_text }}</a>
            @else
                {{ wp_get_attachment_image($field['ID'], $size) }}{{ $caption_text }}
            @endif
        </li>
    @endforeach
</ul>
