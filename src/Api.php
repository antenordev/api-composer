<?php

namespace App\Api;

use App\Json;

class Api {
  function post() {
    return 'post';
  }

  function find($entity) {

    if($entity == "foobar") {
      $data = array(
        ['id'=>1, 'name'=> 'foo'],
        ['id'=>2, 'name'=> 'bar']
      );

      /* echo Json::parseJson(
          true, // Boolean Status
          $data // Data Array
        ); */
      var_dump(new Json());
    }

  }

  function findOne() {
    return 'get';
  }

  function put() {
    return 'put(post)';
  }

  function delete() {
    return 'delete(post)';
  }
}
