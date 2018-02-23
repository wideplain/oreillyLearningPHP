<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/22
 * Time: 14:31
 */

$x = strcmp("x54321","x5678");
if ($x > 0) {
    print 'The string "x54321" is greater than the string "x5678".';
    print "\n";
} elseif ($x < 0) {
    print 'The string "x54321" is less than the string "x5678".';
    print "\n";
}
$x = strcmp("54321","5678");
if ($x > 0) {
    print 'The string "54321" is greater than the string "5678".';
    print "\n";
} elseif ($x < 0) {
    print 'The string "54321" is less than the string "5678".';
    print "\n";
}
$x = strcmp('6 pack','55 card stud');
if ($x > 0) {
    print 'The string "6 pack" is greater than the string "55 card stud".';
    print "\n";
} elseif ($x < 0) {
    print 'The string "6 pack" is less than the string "55 card stud".';
    print "\n";
}
$x = strcmp('6 pack',55);
if ($x > 0) {
    print 'The string "6 pack" is greater than the number 55.';
    print "\n";
} elseif ($x < 0) {
    print 'The string "6 pack" is less than the number 55.';
    print "\n";
}
