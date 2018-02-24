<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/24
 * Time: 10:11
 */
$countries = ['New York, NY' => 8175133,
    'Los Angeles, CA' => 3792621,
    'Chicago, IL' => 2695598,
    'Houston, TX' => 2100263,
    'Philadelphia, PA' => 1526006,
    'Phoenix, AZ' => 1445632,
    'San Antonio, TX' => 1327407,
    'San Diego, CA' => 1307402,
    'Dallas, TX' => 1197816,
    'San Jose, CA' => 945942];

//print "<table><tr><td>".implode("</td></tr><tr><td>\n", $countries)."</td></tr></table>";

ksort($countries);

print "<table>";
foreach ($countries as $name => $sum) {
    print "<tr><td> $name </td><td>$sum</td></tr>";
    $mas += $countries[$name];
}

print "<tr><td>合計</td><td>$mas<td></tr>";

print "</table>";

