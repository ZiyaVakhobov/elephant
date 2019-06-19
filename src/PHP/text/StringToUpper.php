<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function strtoupper;

class StringToUpper extends BaseString implements ScalarString
{

    /**
     * StringToUpper constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = strtoupper($value);
    }
}