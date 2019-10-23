<?php

namespace Application\Models;

// use Application\Models\BaseModel;

class Customer extends BaseModel
{
    public function initialize()
    {
        $this->setSource('customers');
    }
}