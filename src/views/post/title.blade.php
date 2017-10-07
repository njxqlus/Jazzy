<div class="{{ get_post_type() }}-title entry-title">
    @if($link)
        <a href="{{ get_the_permalink() }}" title="{{ get_the_title() }}">{!! "<$tag>$title</$tag>" !!}</a>
    @else
        {!! "<$tag>$title</$tag>" !!}
    @endif
</div>