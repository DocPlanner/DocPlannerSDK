#DocPlannerSDK

##Requirements
- PHP >= 5.4
- Guzzle/guzzle >= 3.3
- Guzzle/plugin-oauth >= 3.3
- Symfony/http-foundation >= 2.3

##Namespace
```php
\DocPlanner\SDK\
```

##Example
```php
$dp = new \DocPlanner\SDK\DocPlannerSDK('ConsumerKey', 'ConsumerSecret');

$result = $dp->doctor()->categories();
var_dump($result);
```
