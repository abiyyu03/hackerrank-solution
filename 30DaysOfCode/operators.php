<?php

/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

function solve($meal_cost, $tip_percent, $tax_percent) {
    $tip = $tip_percent/100*$meal_cost;
$tax = $tax_percent/100*$meal_cost;
print(round($meal_cost+$tip+$tax));

}

$meal_cost = doubleval(trim(fgets(STDIN)));

$tip_percent = intval(trim(fgets(STDIN)));

$tax_percent = intval(trim(fgets(STDIN)));

solve($meal_cost, $tip_percent, $tax_percent);
