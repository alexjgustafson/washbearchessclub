<?php
    use Novaway\Component\OpenGraph\OpenGraph;
    use Novaway\Component\OpenGraph\View\OpenGraphRenderer;
?>
<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }} - Washbear Chess Club</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <?php
        $og = new OpenGraph;
        $og->setImage($page->{'og:image'});
        $og->setType('website');
        $og->setTitle($page->title . ' - ' . 'Washbear Chess Club');
        $og->setDesription(sprintf('Details for the Washbear Chess Club %s%s%s',
            $page->title ? 'tournament ' . $page->title . '.' : 'tournament.',
            $page->date ? ' ' . $page->date . '.' : '',
            $page->gameFormat ? ' ' . $page->gameFormat . '.' : ''
        ));
        $og->setUrl('https://' . $page->getUrl());
    ?>
    {!! (new OpenGraphRenderer)->render($og) !!}
</head>
<body class="text-gray-900 font-sans antialiased dark:bg-black dark:text-white">

<div class="px-2 py-8 mb-8 text-center">
    <h1 class="text-3xl font-bold block">{{ $page->title }}</h1>
    <p>{{ $page->gameFormat }}</p>
    <p>{{ $page->location }}</p>
    <p>{{ $page->date }}</p>
    @if ($page->entryFee)
    <p>Entry fee: {{ $page->entryFee }}</p>
    @endif
    <div class="text-center text-xs mt-4 block">
        <a href="/tournaments">< All Tournaments</a>
    </div>
</div>

<div class="prose mx-auto dark:prose-invert px-2">
    @if($page->complete)
        <h2>This Event is Complete.</h2>

        @if($page->crosstable)
            <p><a href="{!! $page->crosstable !!}">View the US Chess Crosstable</a></p>
        @endif
        @if($page->study)
            <p><a href="{!! $page->study !!}">View player-submitted games in this Lichess study</a></p>
        @endif
        <hr/>
    @endif
    @yield('body')
</div>

@yield('entry-form')
@include('_molecules.global-footer')
</body>
</html>
