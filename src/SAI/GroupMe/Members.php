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
 * @see https://dev.groupme.com/docs/v3#members
 */
class Members extends ClientAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#members_add
     */
    public static function add($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * @see https://dev.groupme.com/docs/v3#members_results
     */
    public static function results($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
