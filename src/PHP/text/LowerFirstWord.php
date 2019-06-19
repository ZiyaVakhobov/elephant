<?php


namespace ziya\Elephant\PHP\text;


use function lcfirst;
use ziya\Elephant\PHP\ScalarString;

class LowerFirstWord extends BaseString implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * UpperFirstWords constructor.
     * @param string $value
     *
     */
    public function __construct(string $value)
    {
        $this->value = lcfirst($value);
        $this->count = strlen($this->value);
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function value(): string
    {
        return $this->value;
    }
}