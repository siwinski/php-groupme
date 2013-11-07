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
 * @see https://dev.groupme.com/docs/v3#likes
 */
class Likes extends ClientAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#likes_create
     */
    public static function create($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * @see https://dev.groupme.com/docs/v3#likes_destroy
     */
    public static function destroy($args = null)
    {
        throw new \RuntimeException('Not implemented');
    }

}
