<{{ $tagName ?? 'span' }} {{ $fragmentName ? $id . '="' . $fragment_name . '"' : '' }}
    class=" {{ $bemClass ?? '' }}   {{ $classList ?? '' }} "
    {{ $title ? $title . '="' . $title . '"' : '' }}
    {{ $dataAttributes ?? '' }} {{ $extra ?? '' }}
>
    {{ $visibleText ?? '' }}
</{{ $tagName ?? 'span' }}>
