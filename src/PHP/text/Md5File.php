<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class Md5File extends BaseString implements ScalarString
{
    /**
     * Md5File constructor.
     * @param string $value
     * @param bool $raw_output
     */
    public function __construct(string $value, bool $raw_output = false)
    {
        $this->value = md5_file($value,$raw_output);
    }
}