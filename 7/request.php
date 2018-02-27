<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 19:11
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validate_form()) {
        process_form();
    } else {
        show_form();
    }
} else {
    show_form();
}


function process_form() {
    print "Hello,"."$_POST[my_name]";
}

function show_form() {
    print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name : <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;

}

function validate_form() {
    // my__nameが少なくとも3文字であるかを調べる
    if (strlen($_POST['my_name']) < 3) {
        return false;
    } else {
        return true;
    }
}