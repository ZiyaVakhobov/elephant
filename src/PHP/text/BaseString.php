<?php


namespace ziya\Elephant\PHP\text;


abstract class BaseString
{
    /**
     * Return length of string
     * @var int
     *
     */
    protected $count;

    public function count():int
    {
        return $this->count;
    }
}