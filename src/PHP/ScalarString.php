<?php


namespace ziya\Elephant\PHP;


interface ScalarString
{
    public function __toString():string;
    public function value():string;
    public function count():int;
}