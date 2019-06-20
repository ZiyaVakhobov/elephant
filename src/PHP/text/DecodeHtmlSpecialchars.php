<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class DecodeHtmlSpecialchars extends BaseString implements ScalarString
{
    /**
     * DecodeHtmlSpecialchars constructor.
     * @param string $value
     * @param int $flags
     */
    public function __construct(string $value , int $flags = ENT_COMPAT | ENT_HTML401  )
    {
        $this->value = htmlspecialchars_decode($value.$flags);
    }
}