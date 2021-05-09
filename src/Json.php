<?php

namespace Crapit\Api;

class Json
{
    /**
     * Method json static
     * @param boolean $status status
     * @param array $data data
     */
    public static function json($status, $data)
    {
        echo json_encode(array(
            "status" => $status,
            "data" => $data
        ));
    }
}