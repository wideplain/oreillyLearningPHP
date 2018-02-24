<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 23:12
 */

$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');

print "Before Sorting:\n";
foreach($meal as $key => $value) {
    print "\$meal: $key $value";
}

asort($meal);

print "after Sorting:\n";
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
}