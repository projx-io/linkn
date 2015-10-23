<?php

namespace ProjxIO\Linkn;

class LineSerializer implements Serializer
{
    /**
     * @param mixed $value
     * @return string
     */
    public function serialize($value)
    {
        return (string)$value;
    }
}
