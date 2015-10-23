<?php

namespace ProjxIO\Linkn;

class Log implements Logger
{
    /**
     * @var LogFormatter
     */
    private $formatter;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var LogConsumer
     */
    private $consumer;

    /**
     * @param LogFormatter $formatter
     * @param Serializer $serializer
     * @param LogConsumer $consumer
     */
    public function __construct(LogFormatter $formatter, Serializer $serializer, LogConsumer $consumer)
    {
        $this->formatter = $formatter;
        $this->serializer = $serializer;
        $this->consumer = $consumer;
    }

    /**
     * @param string $message
     * @param array $context
     */
    public function log($message, array $context = [])
    {
        $this->consumer->log($this->serializer->serialize($this->formatter->format($message, $context)));
    }
}
