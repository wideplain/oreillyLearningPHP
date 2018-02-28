<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 23:57
 */
$comments = strip_tags($_POST['comments']);

print $comments;

$comments = htmlentities($_POST['comments']);
print $comments;