<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 17:31
 */

print '<body><table>';
$temp = -50;
while($temp <= 50) {
    print "<tr><td>$temp</td></tr>";
    $temp += 5;
}
print '</table></body>';