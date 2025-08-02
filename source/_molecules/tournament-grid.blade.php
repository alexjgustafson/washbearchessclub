<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach($tournaments as $t)
        @include('_components.basic-card', [
            'url' => $t->getPath(),
            'headline' => $t->title,
            'lines' => [
                $t->gameFormat,
                $t->date,
                $t->entryFee
            ],
        ])
    @endforeach
</div>