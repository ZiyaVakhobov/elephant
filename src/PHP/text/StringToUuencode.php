<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class StringToUuencode extends BaseString implements ScalarString
{
    /**
     * StringToUuencode constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = convert_uuencode($value);
    }
}