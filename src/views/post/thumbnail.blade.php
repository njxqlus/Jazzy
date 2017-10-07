<div class="{{ get_post_type() }}-thumbnail">
    @if($link == 'post')
        <a href="{{ get_the_permalink() }}" title="{{ get_the_title() }}">{!! $thumbnail !!}</a>
    @elseif($link == 'image')
        @php($large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full'))
        <a href="{{ $large_image_url[0] }}">{!! $thumbnail !!}</a>
    @else
        {!! $thumbnail !!}
    @endif
</div>
