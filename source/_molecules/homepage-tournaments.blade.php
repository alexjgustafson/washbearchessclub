<div class="py-8 mb-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center max-w-5xl mx-auto px-8 py-8 md:px-16">
        <div class="text-center md:text-left">
            <h2 class="text-3xl md:text-5xl font-bold block">Classical Tournaments</h2>
            <p class="py-2">US Chess regular rated events</p>

            <div class="max-w-sm mx-auto md:mx-0 my-8">
                @include('_molecules.tournament-grid', ['status' => 'upcoming', 'gridClass' => 'grid-cols-1'])
            </div>

            <div class="my-8 block">
                <a href="/tournaments" class="inline-block text-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Tournaments ></a>
            </div>
        </div>

        <div>
            @img([
                'src' => 'trash-panda-throwdown-001-round-2-closeup--medium.webp',
                'class' => 'h-auto max-w-full rounded-lg mx-auto',
                'alt'   => 'Players thinking during a tournament round.',
                'width' => '450',
                'height' => '600',
                'lazyload' => 'true'
            ])
        </div>
    </div>
</div>
