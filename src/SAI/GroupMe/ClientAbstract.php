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

    protected static $client;

    /**
     * @return \Guzzle\Http\Client
     */
    public static function getClient()
    {
        if (!isset(self::$client)) {
            self::$client = new Client(self::BASE_URL);
        }

        return self::$client;
    }

    /**
     * @return array|\Guzzle\Http\Message\Response
     */
    public static function getResponse(\Guzzle\Http\Message\RequestInterface $request, $returnObject = false)
    {
        $response = $request->send();

        if (!$response->isSuccessful()) {
            throw new \RuntimeException('Request failed');
        }

        return $returnObject ? $response : $response->json();
    }

}
