<div class="py-8 mb-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center max-w-5xl mx-auto px-8 py-8 md:px-16">
        <div class="text-center md:text-left md:order-2">
            <h2 class="text-3xl md:text-5xl font-bold block">Blitz Tournaments</h2>
            @include('_molecules.blitz-details')
        </div>

        <div class="md:order-1">
            @img([
            'src' => 'mile-wide-blitz--small.webp',
            'alt' => 'Chess players playing blitz in a brewery taproom.',
            'class' => 'h-auto max-w-full rounded-lg mx-auto',
            'width' => '450',
            'height' => '600',
            'lazyload' => 'true'
            ])
        </div>
    </div>
</div>
