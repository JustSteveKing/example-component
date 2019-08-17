<?php

declare(strict_types=1);

namespace JustSteveKing\Example;

class Component
{
    /**
     * A public method which will return Hello, $name
     * 
     * @param   String  $name
     * 
     * @return  String
     */
    public function hello(String $name): String
    {
        return "Hello, $name";
    }
}
