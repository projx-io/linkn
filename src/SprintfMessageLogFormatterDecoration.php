<?php

namespace ProjxIO\Linkn;

class SprintfMessageLogFormatterDecoration extends LogFormatterDecoration
{
    /**
     * @var string
     */
    private $pattern;

    /**
     * @param LogFormatter $formatter
     * @param string $pattern
     */
    public function __construct(LogFormatter $formatter, $pattern)
    {
        parent::__construct($formatter);
        $this->pattern = $pattern;
    }

    /**
     * @param string $message
     * @param mixed $context
     */
    public function preFormat(&$message, &$context)
    {
        $message = sprintf($this->pattern, $message);
    }
}
