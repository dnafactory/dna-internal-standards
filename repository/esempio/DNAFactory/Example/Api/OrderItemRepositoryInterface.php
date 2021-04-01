<?php

namespace DNAFactory\Example\Api;

use DNAFactory\Example\Api\Data\OrderItemInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface OrderItemRepositoryInterface
{
    /**
     * Create or update a OrderItem.
     *
     * @param OrderItemInterface $page
     * @return OrderItemInterface
     */
    public function save(OrderItemInterface $page);

    /**
     * Get a OrderItem by Id
     *
     * @param int $id
     * @return OrderItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If OrderItem with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve OrderItems which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a OrderItem
     *
     * @param OrderItemInterface $page
     * @return OrderItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If OrderItem with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(OrderItemInterface $page);

    /**
     * Delete a OrderItem by Id
     *
     * @param int $id
     * @return OrderItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
