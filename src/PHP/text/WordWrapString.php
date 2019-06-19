<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class WordWrapString extends BaseString implements ScalarString
{
    public function __construct(string $value, int $stringLength = 75, string $break = "\n", bool $cutWord = false)
    {
        $this->value = wordwrap($value,$stringLength,$break,$cutWord);
    }
}