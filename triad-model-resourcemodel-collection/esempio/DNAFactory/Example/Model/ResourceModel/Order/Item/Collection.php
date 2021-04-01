<?php

namespace DNAFactory\Example\Model\ResourceModel\Order\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            \DNAFactory\Example\Model\Order\Item::class,
            \DNAFactory\Example\Model\ResourceModel\Order\Item::class
        );
    }
}
