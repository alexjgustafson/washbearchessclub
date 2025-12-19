<?php

/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler->directive('img', function ($exp) {
    // Remove outer brackets from the expression
    $exp = trim($exp, '[]');

    // Parse array notation into actual array
    $atts = [];
    if (preg_match_all("/['\"]?(\w+)['\"]?\s*=>\s*['\"]([^'\"]*)['\"]?/", $exp, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $atts[$match[1]] = $match[2];
        }
    }

    global $IMAGE_BUCKET;
    $atts['src'] = $IMAGE_BUCKET . ltrim($atts['src'], '//');

    $attString = '';
    foreach ($atts as $key => $val) {
        $attString .=  htmlspecialchars($key) . '="' . htmlspecialchars($val) . '" ';
    }
    return '<img ' . $attString . ' />';
});