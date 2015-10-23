<?php

namespace ProjxIO\Linkn;

class EchoLogConsumer implements LogConsumer
{
    /**
     * @param string $value
     */
    public function log($value)
    {
        echo $value;
    }
}
