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
class Members extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#members_add
     */
    public function add(array $members)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * @see https://dev.groupme.com/docs/v3#members_results
     */
    public function results($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
