<?php

namespace ProjxIO\Linkn;

class PostLogConsumer implements LogConsumer
{
    const TYPE_FORM = 'application/x-www-form-urlencoded';
    const TYPE_JSON = 'application/json';

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $address
     * @param $type
     */
    public function __construct($address, $type = self::TYPE_FORM)
    {
        $this->address = $address;
        $this->type = $type;
    }

    /**
     * @param mixed $value
     */
    public function log($value)
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-type: ' . $this->type,
                'content' => $value
            ]
        ]);

        $result = file_get_contents($this->address, false, $context);
    }
}
