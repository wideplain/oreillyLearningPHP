<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 20:55
 */

$meals = array('Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0); // Shrimp Puffs are free!
$books = array("The Eater's Guide to Chinese Characters",
    'How to Cook and Eat in Chinese');

if (array_key_exists('Shrimp Puffs', $meals)) {
    print "Yes, we have Shrimp Puffs";
}

if (array_key_exists('Steak Sandwitch', $meals)) {
    print "Yes, we have Steak Sandwitch";
}

if (array_key_exists(1, $books)) {
    print "ELEMENT 1 is How to Cook and Eat Chinese";
}

if (in_array(3, $meals)) {
    print 'There is a $3 item.';
}

if (in_array("the eater's guide to chinese characters", $books)) {
    print "We have the Eater's Guide to Chinese Characters.";
}