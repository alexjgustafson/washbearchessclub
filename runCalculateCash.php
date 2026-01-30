#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
require 'calculateCash.php';

// Parse command line arguments
$prizes = [];
$entryFee = 0;
$expected = 0;

// Get arguments from command line
// Usage: php runCalculateCash.php --prizes=100,60,30,30 --entry-fee=30 --expected=15
$options = getopt('', ['prizes:', 'entry-fee:', 'expected:']);

if (isset($options['prizes'])) {
    $prizes = array_map('intval', explode(',', $options['prizes']));
}

if (isset($options['entry-fee'])) {
    $entryFee = (int) $options['entry-fee'];
}

if (isset($options['expected'])) {
    $expected = (int) $options['expected'];
}

// Validate inputs
if (empty($prizes) || $entryFee === 0 || $expected === 0) {
    echo "Usage: composer calc-cash -- --prizes=100,60,30,30 --entry-fee=30 --expected=15\n";
    echo "\nOptions:\n";
    echo "  --prizes       Comma-separated list of prize amounts (e.g., 100,60,30,30)\n";
    echo "  --entry-fee    Entry fee per player in dollars\n";
    echo "  --expected     Expected number of players\n";
    exit(1);
}

// Run the calculation
$bills = calculateCash($prizes, $entryFee, $expected);

// Display results
echo "\n=== Tournament Cash Calculator ===\n\n";
echo "Prizes: $" . implode(', $', $prizes) . "\n";
echo "Entry Fee: $" . $entryFee . "\n";
echo "Expected Players: " . $expected . "\n\n";

echo "Bills Needed:\n";
echo "-------------\n";

$total = 0;
foreach ($bills as $denomination => $count) {
    if ($count > 0) {
        echo sprintf("$%-3s x %2d = $%d\n", $denomination, $count, $denomination * $count);
        $total += $denomination * $count;
    }
}

echo "-------------\n";
echo "Total Cash: $" . $total . "\n\n";
