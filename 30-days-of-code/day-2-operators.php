<?php

// https://www.hackerrank.com/challenges/30-operators/problem

/**
 * @param int $meal_cost
 * @param int $tip_percent
 * @param int $tax_percent
 */
function solve($meal_cost, $tip_percent, $tax_percent)
{
    // Calculate tip
    $tip = $meal_cost * ($tip_percent / 100);

    // Calculate tax
    $tax = $meal_cost * ($tax_percent / 100);

    // Calculate total cost
    $total_cost = $meal_cost + $tip + $tax;

    // Round the total cost to the nearest integer
    $total_cost = round($total_cost);

    // Output the total cost
    echo $total_cost;
}

$meal_cost = doubleval(trim(fgets(STDIN)));
$tip_percent = intval(trim(fgets(STDIN)));
$tax_percent = intval(trim(fgets(STDIN)));
solve($meal_cost, $tip_percent, $tax_percent);
