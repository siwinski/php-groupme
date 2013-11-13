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
 * @see https://dev.groupme.com/docs/v3#sms_mode
 */
class SmsMode extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#sms_mode_create
     */
    public function create($duration, $registrationId = '')
    {
        $request = $this->client->post(
            '/users/sms_mode',
            null,
            array(
                'duration'        => $duration,
                'registration_id' => $registrationId,
            )
        );

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#sms_mode_delete
     */
    public function delete($args = null)
    {
        $request = $this->client->post('/users/sms_mode/delete');

        return $this->getResponse($request);
    }

}
