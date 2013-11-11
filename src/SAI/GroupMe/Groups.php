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
 * @see https://dev.groupme.com/docs/v3#groups
 */
class Groups extends ApiAbstract
{

    /**
     * @see https://dev.groupme.com/docs/v3#groups_index
     */
    public function index($page = 0, $per_page = 0)
    {
        $request = $this->getClient()->get(array(
            '/groups?page={page}&per_page={per_page}',
            array(
                'page'     => (int) $page     ?: '',
                'per_page' => (int) $per_page ?: '',
            )
        ));

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#groups_index_former
     */
    public function former($args = null)
    {
        $request = $this->getClient()->get('/groups/former');

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#groups_show
     */
    public function show($id)
    {
        $request = $this->getClient()->get('/groups/' . $id);

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#groups_create
     */
    public function create($name, $description = '', $imageUrl = '', $share = false)
    {
        $request = $this->getClient()->post('/groups', null, array(
            'name'        => $name,
            'description' => $description,
            'image_url'   => $imageUrl,
            'share'       => $share ? 1 : 0,
        ));

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#groups_update
     */
    public function update($id, array $args)
    {
        throw new \RuntimeException('Not implemented');

        $values = array();
        for (array('name', 'description', 'image_url', 'share') as $value) {
          if (isset($$value)) {
              $values[$value] = $$value;
          }
        }

        $request = $this->getClient()->post(
            array('/groups/{id}/update', array('id' => $id)),
            null,
            array(
                'name'        => $name,
                'description' => $description,
                'image_url'   => $imageUrl,
                'share'       => $share ? 1 : 0,
            )
        );

        return $this->getResponse($request);
    }

    /**
     * @see https://dev.groupme.com/docs/v3#groups_destroy
     */
    public function destroy($id)
    {
        $request = $this->getClient()->post('/groups/' . $id . '/destroy');

        return $this->getResponse($request);
    }

}
