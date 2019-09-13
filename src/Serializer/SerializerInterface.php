<?php

/**
 * Overnet.php
 * 
 * @author  Tianle Xu <xtl@xtlsoft.top>
 * @license MIT
 * @package Overnet
 * @link    https://github.com/xtlsoft/Overnet.php
 */

namespace Overnet\Serializer;

interface SerializerInterface
{
    /**
     * Serialize some data
     *
     * @param mixed $data
     * @return string
     */
    public function serialize($data): string;
    /**
     * Unserialize some data
     *
     * @param string $encoded
     * @return mixed
     */
    public function unserialize(string $encoded);
}
