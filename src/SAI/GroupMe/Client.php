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

use Guzzle\Http\Client as GuzzleClient;

/**
 *
 */
class Client extends GuzzleClient
{
    const BASE_URL = 'https://api.groupme.com/v3';

    private $accessToken;

    public function __construct($accessToken, $config = null)
    {
        parent::__construct(self::BASE_URL, $config);
        $this->setAccessToken($accessToken);
    }

    public function setAccessToken($accessToken)
    {
        $accessToken = trim((string) $accessToken);
        if (empty($accessToken)) {
            throw new \InvalidArgumentException('Access token empty');
        }

        $this->accessToken = $accessToken;
        $this->setDefaultOption('headers/X-Access-Token',  $accessToken);

        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }
}
