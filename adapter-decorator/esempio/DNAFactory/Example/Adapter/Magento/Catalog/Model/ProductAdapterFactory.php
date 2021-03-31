<?php

namespace DNAFactory\Example\Adapter\Magento\Catalog\Model;

class ProductAdapterFactory
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
        $instanceName = \DNAFactory\Example\Adapter\Magento\Catalog\Model\ProductAdapter::class
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
    public function create(\Magento\Catalog\Api\Data\ProductInterface $product, array $data = [])
    {
        $data['product'] = $product;
        $object = $this->_objectManager->create($this->_instanceName, $data);
        return $object;
    }
}
