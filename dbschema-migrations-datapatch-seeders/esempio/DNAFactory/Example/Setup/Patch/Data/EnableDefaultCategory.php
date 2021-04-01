<?php

namespace DNAFactory\Example\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;

class EnableDefaultCategory implements DataPatchInterface
{
    protected \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository;

    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    public function apply()
    {
        $category = $this->categoryRepository->get(1);
        $category->setCiccio("xx");
        $this->categoryRepository->save($category);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
