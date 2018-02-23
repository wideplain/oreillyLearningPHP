<?php
// フォームがサブミットされた場合にあいさつを出力する
if ($_POST['zipcode']) {
    $zipcode = trim($_POST['zipcode']);
    $zip_length = strlen($zipcode);
    if ($zip_length != 5) {
        print "Please enter a ZIP code that is 5 characters long.";
    }
} else {
// そうでなければ、フォームを出力する
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="zipcode" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
?>