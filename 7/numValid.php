<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 22:33
 */

$input['age'] =filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, array('options' => array('min_range' => 18, 'max_range' => 65)));
if(is_null($input['age'])|| ($input['age'] === false) || ($input['price'] < 10.00) || ($input['price'] > 50.00)) {
    $errors[] = 'Please enter a valid price between $10 and $50.';
}