<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class NumberToString extends BaseString implements ScalarString
{
    public function __construct(int $value)
    {
        $this->value = chr($value);
    }
}