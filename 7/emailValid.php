<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 22:57
 */

$input['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if(! $input['email']) {
    $errors[] = 'Please enter a valid email address';
}