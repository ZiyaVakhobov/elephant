<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function str_shuffle;

class ShuffleString implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * ShuffleString constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = str_shuffle($value);
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