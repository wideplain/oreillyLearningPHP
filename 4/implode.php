<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 21:37
 */
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu = implode("\n", $dimsum);
print $menu;

$letters = array('A','B','C','D');
print implode("\n", $letters);

$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
print '<tr><td>'.implode('</td><td>', $dimsum).'</td></tr>';

