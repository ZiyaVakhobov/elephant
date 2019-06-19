<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Sha1 extends BaseString implements ScalarString
{
    /**
     * Sha1 constructor.
     * @param string $value
     * @param bool $raw_output
     */
    public function __construct(string $value, bool $raw_output = false)
    {
        $this->value = sha1($value,$raw_output);
    }

}