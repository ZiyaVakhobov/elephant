<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class EncodeHtmlSpecialchars extends BaseString implements ScalarString
{
    /**
     * EncodeHtmlSpecialchars constructor.
     * @param string $value
     */
    public function __construct(string $value,  int $flags = ENT_COMPAT | ENT_HTML401 , string $encoding = 'UTF-8' , bool $double_encode = true)
    {
        $this->value = htmlspecialchars($value,$flags,$encoding,$double_encode);
    }
}