<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:08
 */
require_once('../vendor/autoload.php');

$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret', 'http://www.znanylekarz.pl/serviceDescription.json');

$result = $dp->execute('DoctorCategories');
var_dump($result);