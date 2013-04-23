<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:09
 */
require_once('../vendor/autoload.php');

$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret', 'http://www.znanylekarz.pl/serviceDescription.json');

$result = $dp->execute('UserRequestAccess', [
	'email' => 'Login',
	'pass'  => 'Password',
]);

$dp->setToken($result['items']['access_token']['access_token'], $result['items']['access_token']['access_token_secret']);

$result = $dp->execute('DoctorCanAddOpinion', [
	'doctor_id' => '1332',
]);
var_dump($result);