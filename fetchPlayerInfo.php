<?php

namespace Alexjgustafson\Washbearchessclub;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

require 'vendor/autoload.php';

// Example command line usage:
//
// composer fetchPlayer 12598530
//
// Output:
//
//[
//    'name'   => 'Alex Gustafson',
//    'id'     => '12598530',
//    'rating' => '1485',
//],
//https://ratings.uschess.org/player/12598530


function fetchPlayerInfo(string $playerId)
{
    $info = [
        'name' => '',
        'id' => $playerId,
        'rating' => '',
    ];
    $player = requestPlayerInfo($playerId);

    if(empty($player)){
        echo "Player not found" . PHP_EOL;
        return;
    }

    // Format Name
    $info['name'] = sprintf('%s%s%s',
        $player['firstName'] ?? '',
        $player['firstName'] && $player['lastName'] ? ' ' : '',
        $player['lastName'] ?? ''
    );

    // Format Rating
    $ratings = Collection::make($player['ratings']);
    $regularRatingItem = $ratings->first(fn($rating)=>$rating['ratingSystem'] === 'R');
    $info['rating'] = $regularRatingItem['rating'] ?? 'Unrated';
    if(($info['rating'] !== 'Unrated') && ($regularRatingItem['isProvisional'] ?? false)){
        $info['rating'] .= ' (P' . $regularRatingItem['gamesPlayed'] . ')';
    }

    // Display
    $i = (object) $info;
    echo PHP_EOL . "[
  'name'   => '{$i->name}',
  'id'     => '{$i->id}',
  'rating' => '{$i->rating}',
]," . PHP_EOL;

    echo "https://ratings.uschess.org/player/" . $playerId . PHP_EOL;
}

function requestPlayerInfo(string $playerId) : array {
    $client = new Client();
    $endpoint = 'https://ratings-api.uschess.org/api/v1/members/' . $playerId;
    $response = $client->request('GET', $endpoint);
    return (200 === $response->getStatusCode()) ? $playerData = json_decode($response->getBody(), true) : [];
}
