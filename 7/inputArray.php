<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 22:14
 */

function validate_form()
{
    $errors = array();
    $input = array();

    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    if (is_null($input['age']) || ($input['age'] === false)) {
        $errors[] = 'Please enter a valid age.';
    }

    $input['price'] = filter_input(INPUT_POST, 'price' === false);
    if (is_null($input['price']) || ($input['price']) === false) {
        $errors = 'Please enter a valid price.';
    }

// $_POST['name']が設定されていない場合に備えてnull合体演算子を使う
    $input['name'] = trim($_POST['name']?? '');
    if (strlen($input['name']) == 0) {
        $errors[] = "Your name is required.";
    }

}