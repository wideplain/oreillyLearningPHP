<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 0:12
 */

function page_header($color) {
    print '<html><head><title>Welcome to my site</title></head>';
    print'<body bgcolor="#' . $color . '">';
}

page_header('cc00cc');