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
     *
     * @todo implement
     */
    public function index($otherUserId, $beforeId = '', $sinceId = '')
    {
        throw new \RuntimeException('Not implemented');

        $request = $this->client->get(array(
            '/direct_messages',
            array(
                'other_user_id' => '',
                'before_id'     => '',
                'since_id'      => '',
            )
        ));

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#direct_messages_create
     *
     * @todo attachments
     */
    public function create($sourceGuid, $recipientId, $text)
    {
        $request = $this->client->post(
            '/direct_messages',
            null,
            array(
                'source_guid'  => $sourceGuid,
                'recipient_id' => $recipientId,
                'text'         => $text,
            )
        );

        return $this->getResponse($request);
    }

}
