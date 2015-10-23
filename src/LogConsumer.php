<?php

namespace ProjxIO\Linkn;

interface LogConsumer
{
    /**
     * @param string $value
     */
    public function log($value);
}
