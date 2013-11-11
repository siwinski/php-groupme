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

/**
 *
 */
abstract class ApiAbstract
{
    protected $client;
    protected $lastResponse;

    public function __construct(Client &$client)
    {
        $this->client = $client;
    }

    /**
     * @return \SAI\GroupMe\Client
     */
    public function getClient()
    {
        return $this->client;
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
        return is_object($this->lastResponse)
            ? $this->lastResponse->getRequest()
            : null;
    }

}
