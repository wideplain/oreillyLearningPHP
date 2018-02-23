<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 17:11
 */

print '<select name="doughnuts">';

for($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
    print "<option>$min - $max</option>\n";
}
print '</select>';
