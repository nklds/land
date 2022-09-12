<?php
/**
 * @var $pages array
 */
?>
@foreach($pages as $page)

    <div>

        <div>
            {{ $page->id }}
        </div>
        <div>
            <img src=" {{ $page->og_image }} " alt=" {{ $page->title }}">
        </div>

    </div>

    @endforeach
