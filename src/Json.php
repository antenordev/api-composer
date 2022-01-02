<?php

namespace App\Json;

class Json {
  /**
   * Method parseJson static
   * @param boolean $status status
   * @param array $data data
   */
  public static function parseJson($status, $data) {
    return json_encode(array(
      "status" => $status,
      "data" => $data
    ));
  }
}
