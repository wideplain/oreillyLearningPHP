<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 20:38
 */

if (strlen($_POST['email']) == 0) {
    $errors[] = "You must enter an email address.";
}

// 整数入力のフィルタリング

$ok = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
if(is_null($ok) || ($ok == false)) {
    $errors[] = 'Please enter a valid age';
}