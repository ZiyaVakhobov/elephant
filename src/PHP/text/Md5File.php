<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Md5File extends BaseString implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * Md5File constructor.
     * @param string $value
     * @param bool $raw_output
     */
    public function __construct(string $value, bool $raw_output = false)
    {
        $this->value = md5_file($value,$raw_output);
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