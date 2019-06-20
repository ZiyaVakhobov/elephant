<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class UrlEncode extends BaseString implements ScalarString
{
    /**
     * UrlEncode constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = urlencode($value);
    }
}