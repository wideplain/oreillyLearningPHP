<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 1:19
 */

function colorcode($r, $g, $b) {
    $r = dechex($r);
    $g = dechex($g);
    $b = dechex($b);
    return '#'.$r.$g.$b;
}

print colorcode(213, 33, 44);