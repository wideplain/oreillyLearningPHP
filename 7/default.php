<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/28
 * Time: 0:03
 */

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $defaults = $_POST;
} else {
    $defaults = array('delivery' => 'yes',
        'size' => 'medium',
                      'main_dish' => array('taro','tripe'),
                      'sweet' => 'cake');
}

print '<input type="text" name="my_name" value="'. htmlentities($defaults['my_name']).'">';