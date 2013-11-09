<?php

/**
 * This file is part of the SAI/GroupMe package.
 *
 * (c) Shawn Iwinski <shawn.iwinski@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SAI\GroupMe;

use Guzzle\Http\Client;

/**
 *
 */
abstract class ClientAbstract
{

    const BASE_URL = 'https://api.groupme.com/v3';

    private static $clientCache = array();

    private $accessToken;

    protected $lastResponse;

    public function __construct($accessToken)
    {
        $this->setAccessToken($accessToken);
    }

    public function setAccessToken($accessToken)
    {
        $accessToken = trim((string) $accessToken);
        if (empty($accessToken)) {
            throw new \InvalidArgumentException('Access token empty');
        }

        $this->accessToken = $accessToken;
        $this->getClient()->setDefaultOption('headers/X-Access-Token',  $accessToken);

        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return \Guzzle\Http\Client
     */
    public function getClient()
    {
        if (!isset(self::$clientCache[$this->accessToken])) {
            self::$clientCache[$this->accessToken] = new Client(self::BASE_URL);
        }

        return self::$clientCache[$this->accessToken];
    }

    /**
     * @return array|\Guzzle\Http\Message\Response
     */
    public function getResponse(\Guzzle\Http\Message\RequestInterface $request, $json = true)
    {
        $this->lastResponse = $request->send();

        if (!$this->lastResponse->isSuccessful()) {
            throw new \RuntimeException('Request failed');
        }

        return $this->getLastResponse($json);
    }

    /**
     * @return \Guzzle\Http\Message\Response
     */
    public function getLastResponse($json = true)
    {
        if (!is_object($this->lastResponse)) {
            return null;
        }

        return $json ? $this->lastResponse->json() : $this->lastResponse;
    }

    /**
     * @return \Guzzle\Http\Message\RequestInterface
     */
    public function getLastRequest()
    {
        return is_object($this->lastResponse) ? $this->lastResponse->getRequest() : null;
    }

}
