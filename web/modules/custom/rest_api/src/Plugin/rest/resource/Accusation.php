<?php

namespace Drupal\rest_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "accusation",
 *   label = @Translation("Accuse"),
 *   uri_paths = {
 *     "create" = "/api/cluedo/accuse"
 *   }
 * )
 */
class Accusation extends ResourceBase {

    /**
   * Responds to entity POST requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function post() {
    $response = ['message' => 'Hello, accusation!'];
    return new ResourceResponse($response);
  }
}