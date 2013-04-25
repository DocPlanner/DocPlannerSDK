<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:08
 */
require_once('../vendor/autoload.php');

$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret');
$dp->user()->requestAccess('EM@IL', 'PASSWORD');
/**
 * @var \DocPlanner\SDK\Base\Result $searchResults
 */
$searchResults = $dp->doctor()->search('alergolog', 'warszawa');

/**
 * @var \DocPlanner\SDK\Model\Doctor\Search $searchResultModel
 */
foreach($searchResults as $searchResultModel)
{
	echo $searchResultModel['id'], ': ', $searchResultModel->name, ' ', $searchResultModel->surname, PHP_EOL;
}
$searchResultModel = array_shift($searchResults->getArrayCopy());
$profileResultModel = $dp->doctor()->profile($searchResultModel['id']);
var_dump($profileResultModel);