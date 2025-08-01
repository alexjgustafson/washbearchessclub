<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }} - Washbear Chess Club</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    {!! $page->opengraph  !!}
</head>
<body class="text-gray-900 font-sans antialiased">

<div class="py-8 mb-8 text-center">
    <h1 class="text-3xl font-bold block">{{ $page->title }}</h1>
    <p>{{ $page->gameFormat }}</p>
    <p>{{ $page->location }}</p>
    <p>{{ $page->date }}</p>
    @if ($page->entryFee)
    <p>Entry fee: {{ $page->entryFee }}</p>
    @endif
    <div class="text-center text-xs mt-4 block">
        <a href="/">< Return Home</a>
    </div>
</div>

<div class="prose mx-auto">
    @yield('body')
    <h2 id="online-registration" >Online Registration</h2>
</div>
<div class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfS86ohRoL5lB4xQaTwo5Nj92WE85QG2GcwB2mCCgiy_2wGSg/viewform?embedded=true" width="640" height="713">Loading…</iframe>
</div>
</body>
</html>
