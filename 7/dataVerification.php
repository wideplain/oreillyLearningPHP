<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 19:50
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($form_error = validate_form()) {
        show_form($form_error);
    } else {
        process_form();
    }
} else {
    show_form();
}

function process_form () {
    print "Hello, ".$_POST['my_name'];
}

function show_form($errors = '') {
    if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print <<<_HTML_

<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}

function validate_form() {
    $errors = array();
    if (strlen($_POST['my_name']) < 3) {
        $errors[] = 'Your name must be at latest 3 letters long.';
    }
    return $errors;
}