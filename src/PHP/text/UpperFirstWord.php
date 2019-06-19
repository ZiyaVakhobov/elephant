<?php

namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function ucfirst;

class UpperFirstWord extends BaseString implements ScalarString
{

    /**
     * UpperFirstWords constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = ucfirst($value);
        $this->count = strlen($this->value);
    }

}