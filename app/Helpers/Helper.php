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
     * @return array
     */
    function decodeData($data): array
    {
        return (new Hashids())->decode($data);
    }
}

