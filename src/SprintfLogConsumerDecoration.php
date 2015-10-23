<?php

namespace ProjxIO\Linkn;

class SprintfLogConsumerDecoration extends LogConsumerDecoration
{
    /**
     * @var string
     */
    private $pattern;

    /**
     * @param LogConsumer $consumer
     * @param string $pattern
     */
    public function __construct(LogConsumer $consumer, $pattern = '')
    {
        parent::__construct($consumer);
        $this->pattern = $pattern;
    }

    /**
     * @param string $value
     * @return string
     */
    public function preLog($value)
    {
        return sprintf($this->pattern, $value);
    }
}