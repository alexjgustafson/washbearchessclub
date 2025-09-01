<?php $status = $status ?? 'all'; ?>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach($tournaments as $t)
        <?php
            $isUpcoming = true;
            $isPast = true;
            $shouldShow = true;
            switch ($status) {
                case 'upcoming':
                    $shouldShow = $isUpcoming;
                    break;
                case 'past':
                    $shouldShow = $isPast;
                    break;
                default:
                    break;
            }
        ?>
        @if($shouldShow)
            @include('_components.basic-card', [
            'url' => $t->getPath(),
            'headline' => $t->title,
            'lines' => [
                $t->gameFormat,
                $t->date,
                $t->entryFee
            ],
        ])
        @endif
    @endforeach
</div>