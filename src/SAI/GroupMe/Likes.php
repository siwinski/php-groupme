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
class Likes extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#likes_create
     */
    public function create($coversationId, $messageId)
    {
        $request = $this->client->post(array(
            '/messages/{conversation_id}/{message_id}/like',
            array(
                'conversation_id' => $coversationId,
                'message_id'      => $messageId,
            )
        ));

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#likes_destroy
     */
    public function destroy($coversationId, $messageId)
    {
        $request = $this->client->post(array(
            '/messages/{conversation_id}/{message_id}/unlike',
            array(
                'conversation_id' => $coversationId,
                'message_id'      => $messageId,
            )
        ));

        return $this->getResponse($request);
    }

}
