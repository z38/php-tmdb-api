<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Collections
    extends AbstractApi
{
    /**
     * Get the basic collection information for a specific collection id.
     *
     * You can get the ID needed for this method by making a /movie/{id} request
     * and paying attention to the belongs_to_collection hash.
     *
     * Movie parts are not sorted in any particular order.
     * If you would like to sort them yourself you can use the provided release_date.
     *
     * @param $collection_id
     * @param array $options
     * @return mixed
     */
    public function getCollection($collection_id, array $options = array())
    {
        return $this->get('collection/' . $collection_id, $options);
    }

    /**
     * Get all of the images for a particular collection by collection id.
     *
     * @param $collection_id
     * @param array $options
     * @return mixed
     */
    public function getImages($collection_id, array $options = array())
    {
        return $this->get('collection/' . $collection_id . '/images', $options);
    }
}