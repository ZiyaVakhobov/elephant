<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class UrlDecode extends BaseString implements ScalarString
{
    /**
     * UrlDecode constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = urldecode($value);
    }
}