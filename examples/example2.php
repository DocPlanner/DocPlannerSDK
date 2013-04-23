<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:08
 */
require_once('../vendor/autoload.php');

$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret');

$dp->user()->login('EM@IL', 'PASSWORD');
$result = $dp->doctor()->canAddOpinion(1332);
var_dump($result);