<?php $status = $status ?? 'all'; ?>
<?php $cardHeading = $cardHeading ?? ''; ?>
<?php $gridClass = $gridClass ?? 'grid-cols-2 md:grid-cols-3'; ?>
<?php $eventType = $eventType ?? 'classical'; ?>

<div class="grid {{ $gridClass }} gap-4">
    @foreach($tournaments as $t)
        <?php
            $isComplete = (bool) $t->complete;
            $isUpcoming = !$isComplete;
            $shouldShow = ($t->eventType ?? 'classical') === $eventType;
            switch ($status) {
                case 'upcoming':
                    $shouldShow = $shouldShow && $isUpcoming;
                    break;
                case 'past':
                    $shouldShow = $shouldShow && $isComplete;
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
            'headingTag' => $cardHeading ? $cardHeading : null,
        ])
        @endif
    @endforeach
</div>