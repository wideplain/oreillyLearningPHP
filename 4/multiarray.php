<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/24
 * Time: 9:30
 */

$meals = array('breakfst' => ['Walnut', 'Cofee'],
    'lunch' => ['Cashew Nuts', 'White Mashroom'],
    'snack' => ['Died Mulberries', 'Salted Sesame Crab']);

$lunches = [['Chicken','Eggplant','Rice'],
    ['Beef','Scallions','Noodles'],
    ['Eggplant','Tofu']];

$flavors = array(
    'Japanese' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
    'Chinese' => array('hot' => 'mustard', 'pepper-salty' => 'prickly ash'));

print $meals['lunch'][0];
print $lunches[0][0];
print $flavors['Japanese']['salty'];
$lunches[2][] = 'Tofu';

foreach ($flavors as $culture => $culture_flavors) {
    foreach ($culture_flavors as $flavor => $example) {
        print "A $culture $flavor flavor is $example.\n";
    }
}

$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
    array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );

for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
    for($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
        print "Element[$i][$m] is ".$specials[$i][$m]."\n";
    }
}

for($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
    for($m = 0, $num_sub = count($specials); $m < $num_sub; $m++) {
        print "Element[$i][$m] is {$specials[$i][$m]}\n";
    }
}