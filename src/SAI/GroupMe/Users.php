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
 * @see https://dev.groupme.com/docs/v3#users
 */
class Users extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#users_me
     */
    public function me($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
