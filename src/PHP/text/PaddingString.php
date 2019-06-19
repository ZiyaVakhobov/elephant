<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class PaddingString extends BaseString implements ScalarString
{
    /**
     * PaddingString constructor.
     * @param string $value
     * @param int $pad_length
     * @param string $pad_string
     * @param int $pad_type
     */
    public function __construct(string $value, int $pad_length, string $pad_string = ' ', int $pad_type = STR_PAD_RIGHT)
    {
        $this->value = str_pad($value, $pad_length, $pad_string, $pad_type);
    }
}