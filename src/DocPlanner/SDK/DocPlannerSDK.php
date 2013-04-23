<?php
/**
 * Author: Łukasz Barulski
 * Date: 22.04.13 15:13
 */
namespace DocPlanner\SDK;

use DocPlanner\SDK\ServiceDescription\DocPlanner;
use Guzzle\Service\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Guzzle\Service\Description\ServiceDescription;

/**
 * Class DocPlannerSDK
 * @package DocPlanner\SDK
 */
class DocPlannerSDK
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
	 * @var string
	 */
	protected $serviceDescriptionUrl;

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
	 * @param string $serviceDescriptionUrl
	 */
	public function __construct($consumerKey, $consumerSecret, $serviceDescriptionUrl)
	{
		$this->client = new Client();
		$this->consumerKey = $consumerKey;
		$this->consumerSecret = $consumerSecret;
		$this->serviceDescriptionUrl = $serviceDescriptionUrl;
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
	 * @param       $method
	 * @param array $params
	 *
	 * @return array|mixed
	 */
	public function execute($method, array $params = [])
	{
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
		return DocPlanner::factory($this->serviceDescriptionUrl);
	}
}
