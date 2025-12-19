<?php

global $IMAGE_BUCKET;
$IMAGE_BUCKET = 'https://assets.washbearchess.club/images/';

return [
    'production' => false,
    'baseUrl' => 'washbearchess.club',
    'title' => 'Washbear Chess Club',
    'description' => 'Chess club in Louisville, KY since 2025.',
    'collections' => [
        'tournaments' => [
            'path' => 'tournaments/{filename}',
            'sort' => 'eventId'
        ]
    ],
    'og:image' => 'https://assets.washbearchess.club/images/raccoon-with-rook-320x320.jpeg',
    'affiliateMsa' => 'https://ratings.uschess.org/affiliate/A9630067',
    'currentYear' => date('Y'),
    'imageBucket' => $IMAGE_BUCKET,
];
