<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 19:40
 */
$meals = array('Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50);

foreach ($meals as $dish => $price){
    $meals[$dish] = $meals[$dish] * 2;
}

foreach ($meals as $dish => $price) {
    printf("The new price of %s \$%.2f. \n", $dish,$price);
}