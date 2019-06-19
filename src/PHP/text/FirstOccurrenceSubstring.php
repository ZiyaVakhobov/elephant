<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class FirstOccurrenceSubstring extends BaseString implements ScalarString
{
    /**
     * FirstOccurrenceSubstring constructor.
     * @param string $value
     * @param string $search
     * @param bool $before
     */
    public function __construct(string $value, string $search, bool $before = false)
    {
        $this->value = strstr($value,$search,$before);
    }
}