<?php

namespace DNAFactory\Example\Hydrator;

use DNAFactory\Example\Exception\MalformedEntityException;

class AddressHydrator
{
    public function hydrate(array $data, $object)
    {
        $this->validate($data);

        $object->street = $data['street'];
        $object->region = $data['region'];

        if (isset($data['optional'])) {
            $object->optional = $data['optional'];
        }

        return $object;
    }

    public function extract($object): array
    {
        $data = [];

        $data['street'] = $object->street;
        $data['region'] = $object->region;
        if (isset($object->optional)) {
            $data['optional'] = $object->optional;
        }

        return $data;
    }

    protected function validate(array $data)
    {
        if (!isset($data['street'])) {
            throw new MalformedEntityException("Il campo street è un campo obbligatorio");
        }

        if (!isset($data['region'])) {
            throw new MalformedEntityException("Il campo region è un campo obbligatorio");
        }
    }
}
