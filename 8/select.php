<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/03/04
 * Time: 22:25
 */

try {
    $db = new PDO('sqlite:restaurant.db');
} catch (PDOException $e) {
    print "Can't connect:".$e->getMessage();
    exit();
}


$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$q = $db->query('SELECT dish_name, price FROM dishes');
print "WHILE Ver.<br />";
while ($row = $q->fetch()) {
    print "$row[dish_name], $row[price] <br />";
}
