<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/03/04
 * Time: 23:26
 */

try {
    $db = new PDO('sqlite:restaurant.db');
} catch (PDOException $e) {
    print "Can't connect:".$e->getMessage();
    exit();
}

$stmt = $db->prepare('SELECT dish_name, price FROM dishes
                      WHERE dish_name LIKE ?');

while ($row = $stmt->fetch()) {
    print $row;
}