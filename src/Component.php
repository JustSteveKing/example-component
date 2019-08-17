<?php

declare(strict_types=1);

namespace JustSteveKing\Example;

class Component
{
    public function hello(String $name) : String
    {
        return "Hello, $name";
    }
}
