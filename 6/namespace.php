<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/25
 * Time: 23:34
 */

namespace Tiny;

class Fruit {
    public static function munch($bite) {
        print "Here is a tiny munch of $bite.";
    }
}
\Tiny\Fruit::munch('banana');
