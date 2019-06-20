<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Substring extends BaseString implements ScalarString
{
    /**
     * Substring constructor.
     * @param string $value
     * @param int $start
     * @param int $length
     */
    public function __construct(string $value , int $start , int $length =0  )
    {
        $this->value = substr($value, $start, $length);
    }
}