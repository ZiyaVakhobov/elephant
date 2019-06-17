<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Trim implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * Trim constructor.
     * @param string $value
     * @param string $trimCharList
     */
    public function __construct(string $value, $trimCharList= " \t\n\r\0\x0B")
    {
        $this->value = \trim($value,$trimCharList);
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