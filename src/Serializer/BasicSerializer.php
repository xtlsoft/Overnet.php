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

class BasicSerializer implements SerializerInterface
{
    /**
     * Serialize some data
     *
     * @param mixed $data
     * @return string
     */
    public function serialize($data): string
    {
        return serialize($data);
    }
    /**
     * Unserialize some data
     *
     * @param string $encoded
     * @return mixed
     */
    public function unserialize(string $encoded)
    {
        return unserialize($encoded);
    }
}
