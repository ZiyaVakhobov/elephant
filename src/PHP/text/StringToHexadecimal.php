<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class StringToHexadecimal extends BaseString implements ScalarString
{
    /**
     * StringToHexadecimal constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {

        $this->value = bin2hex($value);
    }
}