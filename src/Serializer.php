<?php

namespace ProjxIO\Linkn;

interface Serializer
{
    /**
     * @param mixed $value
     * @return string
     */
    public function serialize($value);
}
