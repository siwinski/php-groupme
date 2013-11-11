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
 * @see https://dev.groupme.com/docs/v3#messages
 */
class Messages extends ApiAbstract
{
    const BEFORE = 'before';
    const AFTER  = 'after';
    const SINCE  = self::AFTER;

    /**
     * @see https://dev.groupme.com/docs/v3#messages_index
     */
    public function index($grouId, $messageId = '', $messageDirection = self::AFTER)
    {
        throw new \RuntimeException('Not implemented');

        $uri = '/groups/' . $groupId . '/messages';
    }

    /**
     * @see https://dev.groupme.com/docs/v3#messages_create
     */
    public function create($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
