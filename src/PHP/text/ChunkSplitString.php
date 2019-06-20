<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;

class ChunkSplitString extends BaseString implements ScalarString
{
    /**
     * ChunkSplitString constructor.
     * @param string $value
     * @param int $chunkLength
     * @param string $chunkEnding
     */
    public function __construct(string $value , int $chunkLength = 76 , string $chunkEnding = "\r\n")
    {
        $this->value = chunk_split($value, $chunkLength,$chunkEnding);
    }
}