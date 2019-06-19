<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Sha1File extends BaseString implements ScalarString
{

    /**
     * Sha1 constructor.
     * @param string $value
     * @param bool $raw_output
     */
    public function __construct(string $value, bool $raw_output = false)
    {
        $this->value = sha1_file($value,$raw_output);
    }

}