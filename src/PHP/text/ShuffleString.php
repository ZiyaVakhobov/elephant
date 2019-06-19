<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function str_shuffle;

class ShuffleString extends BaseString implements ScalarString
{

    /**
     * ShuffleString constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = str_shuffle($value);
    }

}