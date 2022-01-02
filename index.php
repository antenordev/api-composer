<?php

/* require_once __DIR__ . '/src/Json.php';

use App\Json\Json; // Instance Json

$data = array(
  ['id'=>1, 'name'=> 'foo'],
  ['id'=>2, 'name'=> 'bar']
);

echo Json::parseJson(
    true, // Boolean Status
    $data // Data Array
  ); */

require_once __DIR__ . '/src/Api.php';

echo App\Api\Api::find("foobar");
