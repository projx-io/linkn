<?php

namespace ProjxIO\Linkn;

class LogFormatterDecoration implements LogFormatter
{
    /**
     * @var LogFormatter
     */
    private $formatter;

    /**
     * @param LogFormatter $formatter
     */
    public function __construct(LogFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param string $message
     * @param array $context
     * @return mixed
     */
    public function format($message, array $context = [])
    {
        $this->preFormat($message, $context);
        $value = $this->formatter->format($message, $context);
        $this->postFormat($value);
        return $value;
    }

    /**
     * @param string $message
     * @param mixed $context
     */
    public function preFormat(&$message, &$context)
    {
    }

    /**
     * @param mixed $value
     */
    public function postFormat(&$value)
    {
    }
}
