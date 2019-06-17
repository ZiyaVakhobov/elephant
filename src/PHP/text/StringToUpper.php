<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function strtoupper;

class StringToUpper implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * StringToUpper constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = strtoupper($value);
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