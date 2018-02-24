<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/24
 * Time: 23:20
 */

function page_header() {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}

$user = "koya";

page_header();
print "Welcome, $user";

page_footer();

function page_footer(){
    print '<hr>Thanks for visiting.';
    print "</body></html>";
}
