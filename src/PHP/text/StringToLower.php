<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function strtolower;

class StringToLower implements ScalarString
{

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = strtolower($value);
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