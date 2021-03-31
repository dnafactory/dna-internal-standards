<?php

namespace DNAFactory\Example\Api\Data;

interface AddressInterface
{
    public function setZipCode(string $zipCode);
    public function getZipCode();

    public function setCountry(string $country);
    public function getCountry();
}
