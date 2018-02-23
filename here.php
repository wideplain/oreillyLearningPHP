<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/22
 * Time: 0:52
 */

$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';

print <<<HTMLBLOCK
<html>
<head><title>$page_title</title></head>
<body>

<h1>Dinner</h1>
<ul>
<li> Barbecued $meat
<li> Sliced $meat
<li> Braised $meat with $vegetable
</ul>

</body>
</html>
HTMLBLOCK;
