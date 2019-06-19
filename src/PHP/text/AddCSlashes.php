<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class AddCSlashes extends BaseString implements ScalarString
{
    /**
     * AddCSlashes constructor.
     * @param string $value
     * @param string $charList
     */
    public function __construct(string $value , string $charList)
    {
        $this->value = addcslashes($value,$charList);
    }
}