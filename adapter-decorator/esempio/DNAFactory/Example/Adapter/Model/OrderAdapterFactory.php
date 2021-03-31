<?php

namespace DNAFactory\Example\Adapter\Model;

class OrderAdapterFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        $instanceName = \DNAFactory\Example\Adapter\Model\OrderAdapter::class
    ) {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \DNAFactory\Example\Adapter\Magento\Catalog\Model\ProductAdapter
     */
    public function create(\DNAFactory\Example\Model\Order $order, array $data = [])
    {
        $data['order'] = $order;
        $object = $this->_objectManager->create($this->_instanceName, $data);
        return $object;
    }
}
