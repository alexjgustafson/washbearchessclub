<?php $status = $status ?? 'all'; ?>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach($tournaments as $t)
        <?php
            $isComplete = (bool) $t->complete;
            $isUpcoming = !$isComplete;
            $shouldShow = true;
            switch ($status) {
                case 'upcoming':
                    $shouldShow = $isUpcoming;
                    break;
                case 'past':
                    $shouldShow = $isComplete;
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
                $isComplete ? '' : $t->entryFee,
            ],
        ])
        @endif
    @endforeach
</div>