<?php

namespace DNAFactory\Example\Model\ResourceModel\Order;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            \DNAFactory\Example\Model\Order::class,
            \DNAFactory\Example\Model\ResourceModel\Order::class
        );
    }
}
