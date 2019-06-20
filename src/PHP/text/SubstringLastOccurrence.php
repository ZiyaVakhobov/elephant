<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class SubstringLastOccurrence extends BaseString implements ScalarString
{
    /**
     * SubstringFirstOccurrence constructor.
     * @param string $value
     * @param string $charList
     */
    public function __construct(string $value, string $charList)
    {
        $this->value = strrchr($value,$charList);
    }
}