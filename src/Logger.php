<?php

namespace ProjxIO\Linkn;

interface Logger
{
    /**
     * @param $message
     * @param array $context
     */
    public function log($message, array $context = []);
}
