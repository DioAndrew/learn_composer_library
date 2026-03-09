<?php

namespace LearnComposerLibrary;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Costumer"): void
    {
        echo "Hello $name, my name is $this->name";
    }
}