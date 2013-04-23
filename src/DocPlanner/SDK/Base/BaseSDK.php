<?php
/**
 * Author: Łukasz Barulski
 * Date: 22.04.13 15:13
 */
namespace DocPlanner\SDK\Base;

use DocPlanner\SDK\Base\ServiceDescription\DocPlanner;
use DocPlanner\SDK\Base\Parameter;
use Guzzle\Service\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Guzzle\Service\Description\ServiceDescription;

/**
 * Class BaseSDK
 * @package DocPlanner\SDK\Base
 */
class BaseSDK
{
	/**
	 * @var string
	 */
	protected $consumerKey;

	/**
	 * @var string
	 */
	protected $consumerSecret;

	/**
	 * @var string|null
	 */
	protected $token;

	/**
	 * @var string|null
	 */
	protected $tokenSecret;

	/**
	 * @var \Guzzle\Service\Client
	 */
	protected $client;

	/**
	 * @param string $consumerKey
	 * @param string $consumerSecret
	 */
	public function __construct($consumerKey, $consumerSecret)
	{
		$this->client = new Client();
		$this->consumerKey = $consumerKey;
		$this->consumerSecret = $consumerSecret;
		$this->client->addSubscriber($this->_getOauthPlugin());
		$this->client->setDescription($this->_getServiceDescription());
	}

	/**
	 * @param string|null $token
	 * @param string|null $tokenSecret
	 *
	 * @return void
	 */
	public function setToken($token, $tokenSecret)
	{
		$this->token = $token;
		$this->tokenSecret = $tokenSecret;
		$this->client->addSubscriber($this->_getOauthPlugin());
	}

	/**
	 * @param                 $method
	 * @param Parameter|null  $params
	 *
	 * @return array|mixed
	 */
	public function execute($method, Parameter $params = null)
	{
		$params = $params ? $params->all() : [];
		$command = $this->client->getCommand($method, $params);
		$result = $this->client->execute($command);
		return $result;
	}

	/**
	 * @return OauthPlugin
	 */
	private function _getOauthPlugin()
	{
		return new OauthPlugin([
			'consumer_key'    => $this->consumerKey,
			'consumer_secret' => $this->consumerSecret,
			'token'           => $this->token,
			'token_secret'    => $this->tokenSecret,
		]);
	}

	/**
	 * @return ServiceDescription
	 */
	private function _getServiceDescription()
	{
		return DocPlanner::factory();
	}
}
