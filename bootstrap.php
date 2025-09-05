<?php

use Novaway\Component\OpenGraph\OpenGraph;
use Novaway\Component\OpenGraph\View\OpenGraphRenderer;
use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->beforeBuild(function (Jigsaw $jigsaw){
    $og = new OpenGraph();
    $og->setTitle($jigsaw->getConfig('title'));
    $og->setImage($jigsaw->getConfig('og:image'));

    $ogRenderer = OpenGraphRenderer::create();
    $jigsaw->setConfig('opengraph', $ogRenderer->render($og));
});
