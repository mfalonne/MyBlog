<?php

namespace app\validation;

class Validator {

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function validate(array $rules): ?array
    {
        foreach($rules as $name => $rulesArray) {
            if(array_key_exists($name, $this->data)){
                
            }
        }
    }
}