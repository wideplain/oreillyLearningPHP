<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 19:32
 */

$row_styles = array('even','odd');
$style_index = 0;

$meal = array('breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushrooms',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Sauce');

print "<table>\n";
foreach ($meal as $key => $value) {
    print '<tr class="' . $row_styles[$style_index] . '"">';
    print "<tr><td>$key</td><td>$value</td></tr>\n";
    // $style_indexを0と1で切り替える
    $style_index = 1 - $style_index;
}
print '</table>';