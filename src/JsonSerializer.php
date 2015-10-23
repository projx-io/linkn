<?php

namespace ProjxIO\Linkn;

class JsonSerializer implements Serializer
{
    /**
     * @var int
     */
    private $flags;

    /**
     * @param int $flags
     */
    public function __construct($flags = JSON_UNESCAPED_SLASHES)
    {
        $this->flags = $flags;
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function serialize($value)
    {
        return json_encode($value, $this->flags);
    }
}
