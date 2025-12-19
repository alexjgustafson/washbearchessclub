<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl md:text-5xl font-bold block">Upcoming Tournaments</h2>
    <p class="py-2">US Chess Rated Events</p>
    <div class="max-w-2xl mx-auto my-8">
        @include('_molecules.tournament-grid', ['status' => 'upcoming'])
    </div>
    <div class="text-center my-8 block">
        <a href="/tournaments" class="text-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Tournaments ></a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 px-8 py-8 md:px-16">
        <div>
            @img([
                'src' => 'trash-panda-throwdown-001-round-2-closeup--medium.webp',
                'class' => 'h-auto max-w-full rounded-lg',
                'alt'   => 'Players thinking during a tournament round.'
            ])
        </div>
        <div>
            @img([
                'src' => 'tournament-fun--medium.webp',
                'class' => 'h-auto max-w-full rounded-lg',
                'alt' => 'Two players analyzing their game after a tournament round.'
            ])
        </div>
        <div>
            @img([
                'src' => 'trash-panda-throwdown-002-blitz--medium.webp',
                'class' => 'h-auto max-w-full rounded-lg',
                'alt' => 'Players laughing after a blitz game between rounds.'
            ])
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 px-8 py-8 md:px-16">
        <div>
            @img([
                'src' => 'trash-panda-throwdown-002-full--large.webp',
                'class' => 'h-auto max-w-full rounded-lg',
                'alt' => 'A full room of chess players at a tournament.'
            ])
        </div>
        <div>
            @img([
                'src' => 'trash-panda-throwdown-001-winner--large.webp',
                'class' => 'h-auto max-w-full rounded-lg',
                'alt' => 'Tournament Director Alex Gustafson awarding a certificate and cash prize to event winner Jacob Johnson.'
            ])
        </div>
    </div>
</div>