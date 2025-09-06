<?php
    use Novaway\Component\OpenGraph\OpenGraph;
    use Novaway\Component\OpenGraph\View\OpenGraphRenderer;
?>
<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <?php
            $og = new OpenGraph;
            $og->setTitle($page->title);
            $og->setImage($page->{'og:image'});
            $og->setType('website');
            $og->setUrl($page->getUrl());
            $og->setDesription($page->description);
        ?>
        {!! (new OpenGraphRenderer)->render($og) !!}
    </head>
    <body class="text-gray-900 font-sans antialiased dark:bg-black dark:text-white">
        <div class="py-8 mb-8 text-center">
            <h1 class="text-3xl font-bold block">Washbear Chess Club</h1>
            <p>US Chess Federation affiliate in Louisville, KY.</p>
        </div>
        @yield('body')
    </body>
</html>
