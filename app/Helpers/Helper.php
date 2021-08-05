<?php

use Hashids\Hashids;

const LENGTH = 10;

if (!function_exists('encodeData')) {
    /**
     * @param $data
     * @return string
     */
    function encodeData($data): string
    {
        return (new Hashids('', LENGTH))->encode($data);
    }
}

if (!function_exists('decodeData')) {
    /**
     * @param $data
     * @return string
     */
    function decodeData($data): string
    {
        $decode_data = (new Hashids('', LENGTH))->decode($data);
        return $decode_data[0];
    }
}

