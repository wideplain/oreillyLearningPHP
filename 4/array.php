<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 19:12
 */

$vegetables = ['corn' => 'yellow', 'beet' => 'red', 'carrot' => 'orange'];

$dinner = [0=> "sweet corn and Asparagas",
    1 => "Lemon Chicken",
    2 => "Braised Bamboo Fungus"];

$lunch = array('Sweet Corn and Asparagus',
    'Lemon Chicken','Braised Bamboo Fungus');


print $dinner[0];
print $vegetables['corn'];
print $lunch[2];
$lunch[] = 'Dried Mushrooms in Brown Sauce';
print $lunch[3];
print count($dinner);