<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class NumberFormat extends BaseString implements  ScalarString
{
    /**
     * NumberFormat constructor.
     * @param float $value
     * @param int $decimals
     * @param string $decimal_separator
     * @param string $thousands_separator
     */
    public function __construct(float $value , int $decimals = 0 , string $decimal_separator = "." , string $thousands_separator = "," )
    {
        $this->value = number_format($value,$decimals,$decimal_separator,$thousands_separator);
    }
}