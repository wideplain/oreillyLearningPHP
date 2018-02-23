<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 17:06
 */

$i = 1;
print '<select name ="people">';
while ($i <= 30) {
    print "<option>$i</option>\n";
    $i++;
}
