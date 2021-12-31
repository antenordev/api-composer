<?php

namespace App\Rest;

use Exception;
use App\Json;

class Rest {
  /**
   * Method open request
   * @param string $request url
   */
  public static function open($request) {
    $url = explode('/', $request['url']);
    $class = ucfirst($url[0]);
    array_shift($url);
    $method = $url[0];
    array_shift($url);
    $params = array();
    $params = $url;

    // Test request
    try {
      if (class_exists($class)) {
        if (method_exists($class, $method)) {
          return
            Json::json(
              true,
              call_user_func_array(array(new $class, $method),$params)
            );
        }
        return
          Json::json(
            true,
            get_class_methods($class)
          );
      } else {
        return
          Json::json(
            false,
            'Class not found!'
        );
      }
    } catch (Exception $e) {
      return
        Json::json(
          false,
          $e->getMessage()
        );
    }
  }
}
