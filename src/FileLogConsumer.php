<?php

namespace ProjxIO\Linkn;

class FileLogConsumer implements LogConsumer
{
    /**
     * @var string
     */
    private $file;

    /**
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @param mixed $value
     */
    public function log($value)
    {
        $handler = fopen($this->file, 'a');
        fwrite($handler, $value);
        fclose($handler);
    }
}
