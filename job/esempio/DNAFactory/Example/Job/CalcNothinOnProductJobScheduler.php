<?php

namespace DNAFactory\Example\Job;

class CalcNothinOnProductJobScheduler
{
    public function execute()
    {
        $products = []; // prendo tutti i prodotti
        foreach ($products as $product) {
            // ... scheduling / publish del $product singolo
        }
    }
}
