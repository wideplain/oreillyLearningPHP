<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/23
 * Time: 21:12
 */

$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++;
$dishes['Roast Duck'] = 3;

$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];
if($dishes['total'] > 15) {
    print "You ate a lot:";
}
print 'You ate ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon.';

$meals['breakfast'] = 'Walnut Bun';
$meals['lunch'] = 'Eggplant with Chili Sauce';
$amounts = array(3, 6);

print "For breakfast, I'd like $meals[breakfast] and for lunch,\n";
print "I'd like $meals[lunch]. I want $amounts[0] at breakfast and\n";
print "$amounts[1] at lunch.\n";

$meals['Walnut Bun'] = '$3.95';
$hosts['www.example.com'] = 'website';

print "Awalnut Bun costs {$meals['Walnut Bun']}.";
print "WWW.example.com is a {$hosts['www.example.com']} ";