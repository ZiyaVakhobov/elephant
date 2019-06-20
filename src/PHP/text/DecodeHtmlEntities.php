<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class DecodeHtmlEntities extends BaseString implements ScalarString
{
    /**
     * DecodeHtmlEntities constructor.
     * @param string $value
     * @param int $flags
     * @param string $encoding
     */
    public function __construct( string $value , int $flags = ENT_COMPAT | ENT_HTML401 , string $encoding = 'UTF-8' )
    {
        $this->value = html_entity_decode($value,$flags,$encoding);
    }
}