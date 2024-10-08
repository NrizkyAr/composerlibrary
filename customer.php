<?php 
namespace membuatlibrary\Belajarphpcomposer\customer;

class customer {
    public function __construct(private string $name)
    {
    }
    public function named (string $name) :string {
        return "hello $name, my is called $this->name";
    }
}

