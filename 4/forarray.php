<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 20:18
 */

$dinner = array('Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus');
foreach ($dinner as $dish) {
    print "You can eat: $dish\n";
}

for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print "Dish number $i is $dinner[$i]\n";
}

$row_styles = array('even','odd');

for($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print '<tr class="'. $row_styles[$i % 2].'">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>";
}
print '</table>';