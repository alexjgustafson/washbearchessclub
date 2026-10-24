<?php $status = $status ?? 'all'; ?>
<?php $cardHeading = $cardHeading ?? ''; ?>
<?php $gridClass = $gridClass ?? 'grid-cols-2 md:grid-cols-3'; ?>
<?php $eventType = $eventType ?? 'classical'; ?>
<?php $emptyMessage = $emptyMessage ?? 'No events are scheduled right now. Check back soon!'; ?>

<?php
    $shown = $tournaments->filter(function ($t) use ($eventType, $status) {
        if (($t->eventType ?? 'classical') !== $eventType) {
            return false;
        }
        switch ($status) {
            case 'upcoming':
                return !$t->complete;
            case 'past':
                return (bool) $t->complete;
            default:
                return true;
        }
    });
?>

@if($shown->isEmpty())
    <p class="py-2">{{ $emptyMessage }}</p>
@else
<div class="grid {{ $gridClass }} gap-4">
    @foreach($shown as $t)
        @include('_components.basic-card', [
            'url' => $t->getPath(),
            'headline' => $t->title,
            'lines' => [
                $t->gameFormat,
                $t->date,
                $t->complete ? '' : $t->entryFee,
            ],
            'headingTag' => $cardHeading ? $cardHeading : null,
        ])
    @endforeach
</div>
@endif
