<?php

namespace ProjxIO\Linkn;

class SerializedContextLogFormatterDecoration extends LogFormatterDecoration
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param LogFormatter $formatter
     * @param Serializer $serializer
     */
    public function __construct(LogFormatter $formatter, Serializer $serializer)
    {
        parent::__construct($formatter);
        $this->serializer = $serializer;
    }

    public function preFormat(&$message, &$context)
    {
        $context = $this->serializer->serialize($context);
    }
}
