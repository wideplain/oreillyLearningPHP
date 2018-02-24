<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 0:27
 */
function page_header($color, $title = 'the page', $header = 'Welcome') {
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

page_header('66cc99', 'Wonders!');