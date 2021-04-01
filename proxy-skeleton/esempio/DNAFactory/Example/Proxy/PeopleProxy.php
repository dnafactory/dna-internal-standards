<?php

namespace DNAFactory\Example\Proxy;

class PeopleProxy
{
    protected $sometinClient;
    protected $personHydrator;
    protected $personFactory;

    public function __construct(
        \DNAFactory\Example\Client\SometinClient $sometinClient,
        \DNAFactory\Example\Hydrator\PersonHydrator $personHydrator,
        \DNAFactory\Example\Data\PersonFactory $personFactory
    ) {
        $this->sometinClient = $sometinClient;
        $this->personHydrator = $personHydrator;
        $this->personFactory = $personFactory;
    }

    public function getByName($name)
    {
        $personArray = $this->sometinClient->get('......', ['name' => $name]);
        return $this->personHydrator->hydrate($personArray, $this->personFactory->create());
    }
}
