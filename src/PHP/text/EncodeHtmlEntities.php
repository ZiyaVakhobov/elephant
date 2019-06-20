<?php


namespace ziya\elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class EncodeHtmlEntities extends BaseString implements ScalarString
{
    /**
     * EncodeHtmlEntities constructor.
     * @param string $value
     * @param int $flags
     * @param string $encoding
     * @param bool $double_encode
     */
    public function __construct(string $value, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'UTF-8',  bool $double_encode = true)
    {
        $this->value = htmlentities($value,$flags,$encoding,$double_encode);
    }
}