<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 0:38
 */
function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $tip * ($tax / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

$meal = 100;
$tax = 0.08;
$tip = 1212;

print restaurant_check($meal, $tax, $tip);