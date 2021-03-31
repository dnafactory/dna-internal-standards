<?php

namespace DNAFactory\Example\Model;

class Order
{
    public function getIncrementId()
    {
        return rand(1, 100);
    }
}
