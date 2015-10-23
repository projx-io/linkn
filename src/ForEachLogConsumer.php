<?php

namespace ProjxIO\Linkn;

class ForEachLogConsumer implements LogConsumer
{
    /**
     * @var LogConsumer[]
     */
    private $consumers;

    /**
     * @param LogConsumer $c1
     * @param LogConsumer $c2
     * @param LogConsumer $c3
     */
    public function __construct(LogConsumer $c1 = null, LogConsumer $c2 = null, LogConsumer $c3 = null)
    {
        $this->consumers = func_get_args();
    }

    /**
     * @param string $value
     */
    public function log($value)
    {
        foreach ($this->consumers as $consumer) {
            $consumer->log($value);
        }
    }
}
