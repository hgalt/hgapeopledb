<?php

declare(strict_types=1);

namespace HGA\hgapeopledb\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;

final class MyPeopleGroupRepository
{
    private const TABLE_NAME = 'tx_hgapeopledb_domain_model_peoplegroup';

    public function __construct(
        private readonly ConnectionPool $connectionPool
    ) {}

    public function findSomething()
    {
        $connection = $this->connectionPool
            ->getConnectionForTable(self::TABLE_NAME);
    }
}