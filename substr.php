<?php
// フォームがサブミットされた場合にあいさつを出力する
if ($_POST['comments']) {
// $_POST['comments']の最初の30文字を抜き出す print substr($_POST['comments'], 0, 30);
    print substr($_POST['comments'], -4, 5);
// 省略記号を追加する
    print '...';
} else {
// そうでなければ、フォームを出力する
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="comments" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
?>
