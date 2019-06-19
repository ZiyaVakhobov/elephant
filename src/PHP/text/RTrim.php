<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function rtrim;

class RTrim extends BaseString implements ScalarString
{
    /**
     * Trim constructor.
     * @param string $value
     * @param string $trimCharList
     */
    public function __construct(string $value, $trimCharList = " \t\n\r\0\x0B")
    {
        $this->value = rtrim($value, $trimCharList);
    }
}