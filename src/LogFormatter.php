<?php

namespace ProjxIO\Linkn;

interface LogFormatter
{
    /**
     * @param string $message
     * @param array $context
     * @return mixed
     */
    public function format($message, array $context = []);
}
