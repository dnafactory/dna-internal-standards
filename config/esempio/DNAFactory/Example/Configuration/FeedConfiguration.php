<?php

namespace DNAFactory\Example\Configuration;

use DNAFactory\Example\Api\FeedConfigurationInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class FeedConfiguration extends AbstractHelper implements FeedConfigurationInterface
{
    protected $xmlConfig = 'parent/feed/%s';

    public function getFilename()
    {
        return (string)$this->getConfig('filename');
    }

    protected function getConfig(
        $field,
        $scopeConfig = \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
        $scopeCode = null
    ) {
        return $this->scopeConfig->getValue(
            sprintf($this->xmlConfig, $field),
            $scopeConfig,
            $scopeCode
        );
    }
}
