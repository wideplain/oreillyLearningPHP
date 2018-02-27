<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 23:09
 */

$sweets = array('puff' => 'Sesame Seed Puff',
    'square' => 'Coconut Milk Gelatin Square',
    'cake' => 'Brown Sugar Cake',
    'ricemeat' => 'Sweet Rice and Meat');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($form_error = validate_form()) {
        show_form($form_error);
    } else {
        process_form();
    }
} else {
    show_form();
}

function generate_options($options) {
    $html = '';
    foreach ($options as $value => $option) {
        $html .= "<option value=\"$value\">$option</option>\n";
    }
    return $html;
}

function process_form(){
    print $_POST['order'];
}

function validate_form() {
    $errors = array();
    $input['order'] = $_POST['order'];
    if(! array_key_exists($input['order'], $GLOBALS['sweets'])) {
        $errors[] = 'Please choose a valid order.';
    }
    return $errors;
}

function show_form($errors = "") {
    if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    $sweets = generate_options($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Order: <select name="order">
$sweets
</select>
<br />
<input type="submit" value="Order">
</form>
_HTML_;

}