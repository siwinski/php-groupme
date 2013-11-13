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
 * @see https://dev.groupme.com/docs/v3#bots
 * @see https://dev.groupme.com/tutorials/bots
 */
class Bots extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#bots_create
     */
    public function create($name, $groupId, $avatarUrl = '', $callbackUrl = '')
    {
        $request = $this->client->post(
            '/bots',
            null,
            array(
                'bot[name]'         => $name,
                'bot[group_id]'     => $groupId,
                'bot[avatar_url]'   => $avatarUrl,
                'bot[callback_url]' => $callbackUrl,
            )
        );

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#bots_post
     */
    public function post($id, $text, $picture_url = '')
    {
        $request = $this->client->post(
            '/bots/post',
            null,
            array(
                'bot_id'      => $id,
                'text'        => $text,
                'picture_url' => $picture_url,
            )
        );

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#bots_index
     */
    public function index()
    {
        $request = $this->client->get('/bots');

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#bots_destroy
     */
    public function destroy($id)
    {
        $request = $this->client->post(
            '/bots/destroy',
            null,
            array(
                'bot_id' => $id,
            )
        );

        return $this->getResponse($request);
    }

}
