<?php

namespace App\Rest;

use Exception;
use App\Json;

class Rest {
  /**
   * Method openRequest request
   * @param string $request url
   */
  public static function openRequest($request) {
    $url = explode('/', $request['url']);
    $class = ucfirst($url[0]);
    array_shift($url);
    $method = $url[0];
    array_shift($url);
    $params = array();
    $params = $url;

    // Testing Request
    try {
      if (class_exists($class)) {
        if (method_exists($class, $method)) {
          return
            Json::parseJson(
              true,
              call_user_func_array(array(new $class, $method), $params)
            );
        }
        return
          Json::parseJson(
            true,
            get_class_methods($class)
          );
      } else {
        return
          Json::parseJson(
            false,
            'Class not found!'
        );
      }
    } catch (Exception $error) {
      return
        Json::parseJson(
          false,
          $error->getMessage()
        );
    }
  }
}
