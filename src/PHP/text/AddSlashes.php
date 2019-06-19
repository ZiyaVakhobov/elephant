<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class AddSlashes extends BaseString implements ScalarString
{
    /**
     * AddSlashes constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = addslashes($value);
    }
}