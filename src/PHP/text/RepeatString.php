<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class RepeatString implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * RepeatString constructor.
     * @param string $value
     * @param int $count
     */
    public function __construct(string $value, int $count)
    {
        $this->value = str_repeat($value,$count);
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