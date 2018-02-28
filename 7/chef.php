<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/28
 * Time: 12:29
 */
// FormHelper.phpがこのファイルと
// 同じディレクトリにあることを前提とする
require 'FormHelper.php';

// セレクトメニューに選択肢の配列を用意する
// これらはdisplay_form()、validate_form()、
// process_form()で必要なので、グローバルスコープで宣言する
$sweets = array('puff' => 'Sesame Seed Puff',
'square' => 'Coconut Milk Gelatin Square',
                'cake' => 'Brown Sugar Cake',
                'ricemeat' => 'Sweet Rice and Meat');
$main_dishes = array('cuke' => 'Braised Sea Cucumber',
    'stomach' => "Sauteed Pig's Stomach",
    'tripe' => 'Sauteed Tripe with Wine Sauce',
    'taro' => 'Stewed Pork with Taro',
    'giblets' => 'Baked Giblets with Salt',
    'abalone' => 'Abalone with Marrow and Duck Feet');

// メインページのロジック
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    list($errors, $input) = validate_form();
    if ($errors) {
        show_form($errors);
    } else {
        process_form();
    }
} else {
    show_form();
}

function show_form($errors = array()) {
    $defaults = array('delivery' => 'yes', 'size' => 'medium');
    $form = new FormHelper($defaults);
    include 'complete-form.php';
}

function validate_form() {
    $input = array();
    $errors = array();

    $input['name'] = trim($_POST['name']?? '');
    if (! strlen($input['name'])) {
        $errors[] = 'Please enter your name.';
    }

    $input['size'] = $_POST['size']?? '';
    if (! in_array($input['size'], ['small', 'medium','large' ])) {
        $errors[] = 'Please select a size';
    }

    $input['sweet'] = $_POST['sweet'] ?? '';
    if (! array_key_exists($input['sweet'], $GLOBALS['sweets'])) {
        $errors[] = 'Please select a valid sweet item.';
    }
    $input['main_dish'] = $_POST['main_dish'] ?? array();
    if (count($input['main_dish']) != 2) {
        $errors[] = 'Please select exactly two main dishes.';
    } else {
        if (! (array_key_exists($input['main_dish'][0], $GLOBALS['main_dishes']) &&
            array_key_exists($input['main_dish'][1], $GLOBALS['main_dishes']))) {
            $errors[] = 'Please select exactly two valid main dishes.';
        }
    }

    $input['delivery'] = $_POST['delivery'] ?? 'no';
    $input['comments'] = trim($_POST['comments'] ?? '');
    if (($input['delivery'] == 'yes') && (! strlen($input['comments']))) {
        $errors[] = 'Please enter your address for delivery.';
    }

    return array($errors, $input);

}

function process_form($input) {
    $sweet = $GLOBALS['sweets'][$input['sweet']];
    $main_dish_1 = $GLOBALS['main_dishes'][ $input['main_dish'][0] ];
    $main_dish_2 = $GLOBALS['main_dishes'][ $input['main_dish'][1] ];


    if (isset($input['delivery']) && ($input['delivery'] == 'yes')) {
        $delivery = 'do';
    } else {
        $delivery = 'do not';
    }

    $message=<<<_ORDER_
    Thank you for your order, {$input['name']}.
    You requested the {$input['size']} size of $sweet, $main_dish_1, and $main_dish_2.
    You $delivery want delivery.
_ORDER_;
    if (strlen(trim($input['comments']))) {
        $message .= 'Your comments: '.$input['comments'];
    }
    mail('chef@restaurant.example.com', 'New Order', $message);
    print nl2br(htmlentities($message, ENT_HTML5));
}

?>