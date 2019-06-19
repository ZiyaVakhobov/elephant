<?php


namespace ziya\Elephant\PHP\text;


use function lcfirst;
use ziya\Elephant\PHP\ScalarString;

class LowerFirstWord extends BaseString implements ScalarString
{
    /**
     * UpperFirstWords constructor.
     * @param string $value
     *
     */
    public function __construct(string $value)
    {
        $this->value = lcfirst($value);
    }
}