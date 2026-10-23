@push('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap">
@endpush

<div class="py-8 mb-8 bg-slate-900 text-white">
    <div class="max-w-3xl mx-auto px-8 py-8 text-center">
        <p class="font-yule text-3xl md:text-4xl text-red-400">Special Event:</p>
        <h2 class="text-3xl md:text-5xl font-bold block">Yule Cat's Hangover</h2>
        <p class="py-2 text-lg">Saturday, December 26th, 2026</p>
        <p class="py-2">A silly, unrated event where every round is a surprise. Random starting positions, random time controls, and come-and-go as you please.</p>
        <p class="py-2">Bring snacks to share. Pay what you want to support the Chess Education Foundation.</p>

        <figure class="my-8">
            @img([
                'src' => 'Yule_cat--medium.webp',
                'alt' => 'A giant black cat with glowing red eyes prowling past snowy cottages under the northern lights',
                'class' => 'h-auto max-w-full rounded-lg mx-auto',
                'width' => '1200',
                'height' => '738'
            ])
            <figcaption class="mt-2 text-xs text-gray-400">
                By Doc Taxon - Own work, CC0, <a href="https://commons.wikimedia.org/w/index.php?curid=180052460" class="underline">https://commons.wikimedia.org/w/index.php?curid=180052460</a>
            </figcaption>
        </figure>

        <div class="my-8 flex flex-wrap justify-center gap-4">
            <a href="/tournaments/yule-cats-hangover" class="inline-block text-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Event Details ></a>
            <a href="/yule-cat-calculator" class="inline-block text-lg text-white border border-white hover:bg-white/10 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 focus:outline-none dark:focus:ring-blue-800">Yule Cat Calculator</a>
        </div>
    </div>
</div>
