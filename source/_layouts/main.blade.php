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
        {!! $page->opengraph  !!}
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="py-8 mb-8 text-center">
            <h1 class="text-3xl font-bold block">Washbear Chess Club</h1>
            <p>US Chess Federation affiliate in Louisville, KY.</p>
        </div>
        @yield('body')
    </body>
</html>
