<?php

namespace ProjxIO\Linkn;

class CompactObjectLogFormatter implements LogFormatter
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $context;

    /**
     * @param string $message
     * @param string $context
     */
    public function __construct($message = 'message', $context = 'context')
    {
        $this->message = $message;
        $this->context = $context;
    }

    /**
     * @param string $message
     * @param array $context
     * @return mixed
     */
    public function format($message, array $context = [])
    {
        return (object)[
            $this->message => $message,
            $this->context => $context,
        ];
    }
}
