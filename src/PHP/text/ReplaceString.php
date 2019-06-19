<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function str_replace;

class ReplaceString extends BaseString implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * ReplaceString constructor.
     * @param string $value
     * @param array $replaceFrom
     * @param array $replaceTo
     * @param int $count
     */
    public function __construct(string $value, array $replaceFrom, array $replaceTo, &$count=0)
    {
        $this->value = str_replace($replaceFrom,$replaceTo,$value, $count);
        $this->count = strlen($this->value);
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public function value(): string
    {
        return $this->value;
    }
}