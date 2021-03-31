<?php

namespace DNAFactory\Example\Data;

use DNAFactory\Example\Api\Data\AddressInterface;
use Magento\Framework\DataObject;

class Address extends DataObject implements AddressInterface
{
    public function setZipCode(string $zipCode)
    {
        return $this->setData('zip_code', $zipCode);
    }

    public function getZipCode()
    {
        return (string)$this->getData('zip_code');
    }

    public function setCountry(string $country)
    {
        return $this->setData('country', $country);
    }

    public function getCountry()
    {
        return (string)$this->getData('country');
    }
}
