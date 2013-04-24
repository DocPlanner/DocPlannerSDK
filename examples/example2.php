<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:08
 */
require_once('../vendor/autoload.php');

$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret');
$dp2 = clone $dp; // clone $dp when is not logged in

$dp->user()->requestAccess('EM@IL', 'PASSWORD');
list($token, $tokenSecret) = array_values($dp->getToken()); // get token data from logged $dp
// here $dp is logged in, but $dp2 not
unset($dp); // delete logged in instance of DocPlannerSDK

$dp2->setToken($token, $tokenSecret); // set token data, here $dp2 is logged in

$result = $dp2->doctor()->canAddOpinion(1332); // canAddOpinion require logged in user

var_dump($result);