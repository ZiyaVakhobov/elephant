<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class RepeatString extends BaseString implements ScalarString
{

    /**
     * RepeatString constructor.
     * @param string $value
     * @param int $count
     */
    public function __construct(string $value, int $count)
    {
        $this->value = str_repeat($value,$count);
    }
}