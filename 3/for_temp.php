<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 17:39
 */

print '<body><table>';
for($temp = -50; $temp <= 50; $temp+=5) {
    print "<tr><td>温度</td><td>$temp</td></tr>";
}
print '</table><body>';