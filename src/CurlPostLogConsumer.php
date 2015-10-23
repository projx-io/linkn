<?php

namespace ProjxIO\Linkn;

class CurlPostLogConsumer implements LogConsumer
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
        $ch = curl_init($this->address);
        curl_setopt_array($ch, [
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $value,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: ' . $this->type,
                'Content-Length: ' . strlen($value)
            ]
        ]);

        $result = curl_exec($ch);
    }
}
