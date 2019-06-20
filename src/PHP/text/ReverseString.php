<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class ReverseString extends BaseString implements ScalarString
{
    /**
     * ReverseString constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = strrev($value);
    }
}