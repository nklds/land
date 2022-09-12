<!-- $page => 'site_name' => 'string', 'language' => 'string', 'favicon' => 'https://via.placeholder.com/16',
    'slug' => 'string', 'visible_name' => 'string', 'extra' => 'string', 'common_head_styles' => 'string',
    'common_head_scripts' => 'string', 'common_after_body_scripts' => 'string', 'title' => 'string',
    'description' => 'string', 'keywords' => 'string', 'og_title' => 'string', 'og_description' => 'string',
    'og_type' => 'string', 'og_image' => 'string', 'og_url' => 'string', 'og_locale' => 'string', 'excerpt' => 'string',

    $head => 'page_id' => 'integer', 'visible_name' => 'string','tag_manager_id' => 'string', 'google_analytics_id' => 'string',
            'yandex_metrika_id' => 'string', 'vk_pixel_id' => 'string', 'facebook_pixel_id' => 'string',
            'my_target_id' => 'string', 'main' => 'boolean', 'extra' => 'string', 'order' => 'integer'
-->

<!doctype html>
<html lang="{{ $language }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="{{ $favicon }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">

    <meta name="og_title" content="{{ $og_title }}">
    <meta name="og_description" content="{{ $og_description }}">
    <meta name="og_type" content="{{ $og_type }}">
    <meta name="og_image" content="{{ $og_image }}">
    <meta name="og_url" content="{{ $og_url }}">
    <meta name="og_locale" content="{{ $og_locale }}">


    {!! $common_head_styles !!}
    {!!  $common_head_scripts  !!}

</head>
<body>
{!! $common_after_body_scripts !!}
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
