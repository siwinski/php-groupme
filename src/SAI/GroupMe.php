<?php

/**
 * This file is part of the SAI/GroupMe package.
 *
 * (c) Shawn Iwinski <shawn.iwinski@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SAI;

use SAI\GroupMe\Client;

use SAI\GroupMe\Bots;
use SAI\GroupMe\DirectMessages;
use SAI\GroupMe\Groups;
use SAI\GroupMe\Likes;
use SAI\GroupMe\Members;
use SAI\GroupMe\Messages;
use SAI\GroupMe\SmsMode;
use SAI\GroupMe\Users;

/**
 *
 */
class GroupMe
{
    public $client;

    public $bots;
    public $directMessages;
    public $groups;
    public $likes;
    public $members;
    public $messages;
    public $smsMode;
    public $users;

    protected function __construct($accessToken)
    {
        $this->client         = new Client($accessToken);

        $this->bots           = new Bots($this->client);
        $this->directMessages = new DirectMessages($this->client);
        $this->groups         = new Groups($this->client);
        $this->likes          = new Likes($this->client);
        $this->members        = new Members($this->client);
        $this->messages       = new Messages($this->client);
        $this->smsMode        = new SmsMode($this->client);
        $this->users          = new Users($this->client);
    }

    public function setAccessToken($accessToken)
    {
        $this->client->setAccessToken($accessToken);
        return $this;
    }

    public function getAccessToken()
    {
        return $this->client->getAccessToken();
    }
}
