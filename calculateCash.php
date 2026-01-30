<?php

use Illuminate\Support\Collection;

/**
 * Calculate tournament cash-on-hand needed
 *
 * This function computes what denominations of bills will be required
 * for distributing prizes and making change during registration.
 *
 * @param int[] $prizes Array of prize amounts in US Dollars (whole numbers)
 * @param int $entryFee Entry fee per player in US Dollars
 * @param int $expected Number of players expected at the tournament
 * 
 * @return Collection Empty collection (placeholder for future implementation)
 * 
 * @example
 * calculateCash([100, 60, 30, 30], 30, 15)
 */

function calculateCash(array $prizes, int $entryFee, int $expected): Collection
{ 
    $bills = getEmptyBillTray();

    // Have prizes on hand
    $prizeBills = getPrizeBills($prizes);
    foreach ($prizeBills as $denomination => $count) {
        $bills[$denomination] += $count;
    }

    // Have enough change on hand
    $changeBills = getChangeBills($entryFee, $expected);
    foreach ($changeBills as $denomination => $count) {
        $bills[$denomination] += $count;
    }

    // Add some ones for making change for pizza
    // Half of the people buy any pizza
    // $3 of change is sufficient to expect
    $pizzaBills = (int) ceil(($expected / 2) * 3);
    $bills["1"] += $pizzaBills;
    
    return $bills;
}

/**
 * Calculate the most efficient bill denominations needed for prize distribution.
 *
 * This function determines the optimal combination of bills to distribute
 * all tournament prizes, minimizing the total number of bills needed.
 *
 * @param int[] $prizes Array of prize amounts in US Dollars
 * 
 * @return Collection Collection of bill denominations and their quantities
 */
function getPrizeBills(array $prizes): Collection {
    $bills = getEmptyBillTray();

    // For each prize, use breakdownAmount to calculate the most
    // efficient way of having the cash on hand.
    foreach ($prizes as $prize) {
        $prizeBreakdown = breakdownAmount($prize);
        
        // Merge this prize's breakdown into the single $bills collection
        foreach ($prizeBreakdown as $denomination => $count) {
            $bills[$denomination] += $count;
        }
    }
   
    return $bills;
}

function getEmptyBillTray(): Collection
{
    return collect([
        '1' => 0,
        '5' => 0,
        '10' => 0,
        '20' => 0,
        '50' => 0,
        '100' => 0,
    ]);
}

/**
 * Break down an amount into the most efficient bill denominations.
 *
 * Uses a greedy algorithm to minimize the total number of bills needed
 * by using the largest denominations first.
 *
 * @param int $amount The dollar amount to break down
 * 
 * @return Collection Collection of bill denominations and their quantities
 * 
 * @example
 * breakdownAmount(237)
 * // Returns: ['100' => 2, '20' => 1, '10' => 1, '5' => 1, '1' => 2]
 */
function breakdownAmount(int $amount): Collection
{
    $bills = getEmptyBillTray();
    $remaining = $amount;
    
    // Greedy algorithm: use largest bills first
    $denominations = [100, 50, 20, 10, 5, 1];
    
    foreach ($denominations as $denomination) {
        $count = intdiv($remaining, $denomination);
        if ($count > 0) {
            $bills[(string)$denomination] = $count;
            $remaining -= ($count * $denomination);
        }
    }
    
    return $bills;
}

/**
 * Calculate bill denominations needed for making change during registration.
 *
 * This function determines what bills are needed to make change for players
 * paying the entry fee, based on expected attendance.
 *
 * @param int $entryFee Entry fee per player in US Dollars
 * @param int $expected Number of players expected at the tournament
 * 
 * @return Collection Collection of bill denominations and their quantities
 */
function getChangeBills(int $entryFee, int $expected): Collection
{
    $bills = getEmptyBillTray();
    
    // 1. Create $registrants as an integer 110% of $expected
    $registrants = (int) ceil($expected * 1.1);
    
    // 2. Create $needsChange as 80% of $registrants, since about 20 percent of people bring exact change in cash or pay by other means
    $needsChange = (int) ceil($registrants * 0.8);
    
    // 3. Given the entry fee, determine the most common way change will need to be made
    // For example, with a $30 entry fee most will provide two $20 bills and need $10 in change
    $mostCommonPayment = determineMostCommonPayment($entryFee);
    $changeNeeded = $mostCommonPayment - $entryFee;
    $commonChangeBreakdown = breakdownAmount($changeNeeded);
    
    // 4. Assume that 80% of the $needsChange people will use that most common scenario
    $commonScenarioCount = (int) ceil($needsChange * 0.8);
    foreach ($commonChangeBreakdown as $denomination => $count) {
        $bills[$denomination] += ($count * $commonScenarioCount);
    }
    
    // 5. For the remaining 20% determine a breakdown that is less greedy
    $lessCommonCount = $needsChange - $commonScenarioCount;
    $lessGreedyBreakdown = breakdownAmountLessGreedy($changeNeeded, $commonChangeBreakdown);
    foreach ($lessGreedyBreakdown as $denomination => $count) {
        $bills[$denomination] += ($count * $lessCommonCount);
    }

    return $bills;
}

/**
 * Determine the most common payment amount for a given entry fee.
 *
 * This function predicts what bills people will most likely use to pay
 * an entry fee, finding the smallest reasonable overpayment.
 *
 * @param int $entryFee Entry fee per player in US Dollars
 * 
 * @return int The most common payment amount
 * 
 * @example
 * determineMostCommonPayment(30) // Returns 40 (two $20 bills)
 * determineMostCommonPayment(15) // Returns 20 (one $20 bill)
 */
function determineMostCommonPayment(int $entryFee): int
{
    $denominations = [100, 50, 20, 10, 5, 1];
    $candidates = [];
    
    // Find all payments using 1-2 bills
    foreach ($denominations as $denomination) {
        $multiple = (int) ceil($entryFee / $denomination);
        $payment = $multiple * $denomination;
        
        // Only consider payments using 1-2 bills
        if ($multiple <= 2 && $payment >= $entryFee) {
            $candidates[] = $payment;
        }
    }
    
    // Return the smallest overpayment (most realistic)
    return !empty($candidates) ? min($candidates) : $entryFee;
}

/**
 * Break down an amount using a less greedy algorithm.
 *
 * This function creates an alternative bill breakdown by avoiding the
 * largest denomination used in the common breakdown.
 *
 * @param int $amount The dollar amount to break down
 * @param Collection $commonBreakdown The common breakdown to avoid
 * 
 * @return Collection Collection of bill denominations and their quantities
 * 
 * @example
 * breakdownAmountLessGreedy(15, collect(['10' => 1, '5' => 1]))
 * // Returns: ['5' => 3] (avoiding tens)
 */
function breakdownAmountLessGreedy(int $amount, Collection $commonBreakdown): Collection
{
    $bills = getEmptyBillTray();
    $remaining = $amount;
    
    // Find the largest denomination used in common breakdown
    $denominationsToAvoid = [];
    foreach ($commonBreakdown as $denomination => $count) {
        if ($count > 0) {
            $denominationsToAvoid[] = (int) $denomination;
        }
    }
    
    // Get the largest denomination to avoid
    $avoidDenomination = !empty($denominationsToAvoid) ? max($denominationsToAvoid) : 0;
    
    // Use greedy algorithm but skip the avoided denomination
    $denominations = [100, 50, 20, 10, 5, 1];
    
    foreach ($denominations as $denomination) {
        if ($denomination === $avoidDenomination) {
            continue; // Skip this denomination
        }
        
        $count = intdiv($remaining, $denomination);
        if ($count > 0) {
            $bills[(string)$denomination] = $count;
            $remaining -= ($count * $denomination);
        }
    }
    
    return $bills;
}
