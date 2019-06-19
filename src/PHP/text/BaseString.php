<?php


namespace ziya\Elephant\PHP\text;


abstract class BaseString
{
    /**
     * @var string
     */
    protected $value;
    /**
     * Return length of string
     *
     */
    public function count():int
    {
        return strlen($this->value);
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