<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 23:00
 */

$dinner = array('Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');

print "Before Sorting:\n";
foreach ($dinner as $key => $value) {
    print "\$dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
    print "\$meal: $key $value\n";
}

sort($dinner);
sort($meal);

print "AFTER Sorting:\n";
foreach ($dinner as $key => $value) {
    print "\$dinner: $key $value\n";
}

foreach($meal as $key => $value) {
    print "\$meal: $key $value\n";
}