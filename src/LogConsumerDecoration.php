<?php

namespace ProjxIO\Linkn;

class LogConsumerDecoration implements LogConsumer
{
    /**
     * @var LogConsumer
     */
    private $consumer;

    /**
     * @param LogConsumer $consumer
     */
    public function __construct(LogConsumer $consumer)
    {
        $this->consumer = $consumer;
    }

    /**
     * @param string $value
     */
    public function log($value)
    {
        $this->postLog($this->consumer->log($this->preLog($value)));
    }

    /**
     * @param string $value
     * @return string
     */
    public function preLog($value)
    {
        return $value;
    }

    /**
     * @param string $value
     * @return string
     */
    public function postLog($value)
    {
        return $value;
    }
}
