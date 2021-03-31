<?php

namespace DNAFactory\Example\Adapter\Model;

class OrderAdapter
{
    /**
     * @var \DNAFactory\Example\Model\Order
     */
    protected $order;

    public function __construct(\DNAFactory\Example\Model\Order $order)
    {
        $this->order = $order;
    }

    /**
     * Modifica di una funzionalità già esistente
     * @return int
     */
    public function getIncrementId()
    {
        return $this->order->getIncrementId();
    }

    /**
     * Aggiunta di una nuova funzionalità
     * @return string
     */
    public function getPdf()
    {
        return 'xxx';
    }
}
