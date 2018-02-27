<?php
/**
 * Created by IntelliJ IDEA.
 * User: koya
 * Date: 2018/02/27
 * Time: 22:38
 */

$range_start = new DateTime('6 months ago');

$range_end = new DateTime();

$input['year'] = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT, array('options' => array('min_range' => 1900, 'max_range' => 2100)));
$input['month'] = filter_input(INPUT_POST, 'month', FILTER_VALIDATE_INT, array('options' => array('min_range' => 1, 'max_range' => 12)));
$input['day'] = filter_input(INPUT_POST, 'day', FILTER_VALIDATE_INT, array('options' => array('min_range' => 1, 'max_range' => 31)));

if ($input['year'] && $input['month'] && $input ['day'] &&
    checkdate($input['month'], $input['day'], $input['year'])) {
    $submitted_date = new DateTime(strtotime($input['year'] . '-' .
        $input['month'] . '-' .
        $input['day']));
    if (($range_start > $submitted_date) || ($range_end < $submitted_date)) {
        $errors[] = 'Please choose a date less than six months old.';
    }
} else {
    $errors[] = 'Please enter a valid date.';
}