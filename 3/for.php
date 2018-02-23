<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 17:08
 */

print'<select name="people">';
for($i = 1; $i <=30; $i++) {
    print "<option>$i</option>\n";
}
print '</select>';