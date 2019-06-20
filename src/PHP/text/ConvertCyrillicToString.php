<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class ConvertCyrillicToString extends BaseString implements ScalarString
{
    public const KOI8_R = 'k';
    public const WINDOWS_1251 = 'w';
    public const ISO8859_5 = 'i';
    public const X_CP866 = 'a';
    public const X_MAC_CYRILLIC = 'M';

    /**
     * ConvertCyrillicToString constructor.
     * @param string $value
     * @param string $from
     * @param string $to
     */
    public function __construct(string $value, string $from, string $to)
    {
        $this->value = convert_cyr_string($value,$from,$to);
    }
}