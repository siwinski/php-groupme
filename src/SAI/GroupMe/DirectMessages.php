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
 * @see https://dev.groupme.com/docs/v3#direct_messages
 */
class DirectMessages extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#direct_messages_index
     */
    public function index($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * @see https://dev.groupme.com/docs/v3#direct_messages_create
     */
    public function create($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
