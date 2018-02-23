<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/22
 * Time: 1:32
 */
$html = '<span class="{class}">Fried Bean Curd<span>
<span class="{class}">Oil-Soaked Fish</span>';
$my_class = "lunch";


print str_replace('{class}', $my_class, $html);

