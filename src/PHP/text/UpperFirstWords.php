<?php

namespace ziya\Elephant\PHP\text;

use ziya\Elephant\PHP\ScalarString;
use function ucwords;

class UpperFirstWords extends BaseString implements ScalarString
{

    /**
     * UpperFirstWords constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = ucwords($value);
    }

}