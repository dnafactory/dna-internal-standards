<?php

namespace DNAFactory\Example\Repository;

use DNAFactory\Example\Api\OrderItemRepositoryInterface;
use DNAFactory\Example\Api\Data\OrderItemInterface;
use DNAFactory\Example\Model\OrderItemFactory;
use DNAFactory\Example\Model\ResourceModel\OrderItem as OrderItemResourceModel;
use DNAFactory\Example\Model\ResourceModel\OrderItem\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class OrderItemRepository implements OrderItemRepositoryInterface
{
    protected $orderItemModelFactory;
    protected $orderItemResourceModel;
    protected $collectionFactory;
    protected $searchResultsFactory;

    /**
     * OrderItemRepository constructor.
     *
     * @param OrderItemFactory $orderItemModelFactory
     * @param OrderItemResourceModel $orderItemResourceModel
     * @param CollectionFactory $collectionFactory
     * @param SearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        OrderItemFactory $orderItemModelFactory,
        OrderItemResourceModel $orderItemResourceModel,
        CollectionFactory $collectionFactory,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->orderItemModelFactory = $orderItemModelFactory;
        $this->orderItemResourceModel = $orderItemResourceModel;
        $this->collectionFactory = $collectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @param OrderItemInterface $orderItem
     * @return OrderItemInterface
     * @throws CouldNotSaveException
     */
    public function save(OrderItemInterface $orderItem)
    {
        try {
            $this->orderItemResourceModel->save($orderItem);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $orderItem;
    }

    /**
     * @param int $id
     * @return OrderItemInterface
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        $orderItem = $this->orderItemModelFactory->create();
        $this->orderItemResourceModel->load($orderItem, $id);
        if (!$orderItem->getId()) {
            throw new NoSuchEntityException(__('OrderItem con ID "%1" non esiste.', $id));
        }
        return $orderItem;
    }

    /**
     * @param OrderItemInterface $orderItem
     * @return bool|OrderItemInterface
     * @throws CouldNotDeleteException
     */
    public function delete(OrderItemInterface $orderItem)
    {
        try {
            $this->orderItemResourceModel->delete($orderItem);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @param int $id
     * @return bool|OrderItemInterface
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($id)
    {
        return $this->delete($this->getById($id));
    }

    /**
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $collection = $this->collectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = $filter->getConditionType() ? $filter->getConditionType() : 'eq';
                $fields[] = $filter->getField();
                $conditions[] = [$condition => $filter->getValue()];
            }
            if ($fields) {
                $collection->addFieldToFilter($fields, $conditions);
            }
        }
        $searchResults->setTotalCount($collection->getSize());
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        $orderItems = [];
        foreach ($collection as $orderItemModel) {
            $orderItems[] = $orderItemModel;
        }
        $searchResults->setItems($orderItems);
        return $searchResults;
    }
}
