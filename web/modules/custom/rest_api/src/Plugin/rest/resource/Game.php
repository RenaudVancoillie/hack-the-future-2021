<?php

namespace Drupal\rest_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "game",
 *   label = @Translation("New Game"),
 *   uri_paths = {
 *     "canonical" = "/api/cluedo/new-game"
 *   }
 * )
 */
class Game extends ResourceBase {

    /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['message' => 'Hello, new game!'];
    return new ResourceResponse($response);
  }
}