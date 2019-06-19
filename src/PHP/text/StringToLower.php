<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function strtolower;

class StringToLower extends BaseString implements ScalarString
{


    /**
     * StringToLower constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = strtolower($value);
    }

}