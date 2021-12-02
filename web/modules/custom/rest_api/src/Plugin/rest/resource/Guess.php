<?php

namespace Drupal\rest_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "guess",
 *   label = @Translation("Guess"),
 *   uri_paths = {
 *     "create" = "/api/cluedo/guess"
 *   }
 * )
 */
class Guess extends ResourceBase {

    /**
   * Responds to entity POST requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function post() {
    $key = \Drupal::request()->get('key');

    $nodes = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadByProperties([
      'field_key' => $key,
    ]);

    if ($node = reset($nodes)) {
      $weapon = $node->get('field_weapon')->value;
      $response = ["weapon" => $weapon ];
    } else {
      $response = [
        "num_correct" => 2,
        "incorrect" => 1
      ];
    }
    
    return new ResourceResponse($response);
  }
}