<?php

declare(strict_types=1);

namespace HGA\Hgapeopledb\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Connection;
use HGA\hgapeopledb\Domain\Repository;

final class MyPeopleRepository
{
    private const TABLE_NAME = 'tx_hgapeopledb_domain_model_people';
    private const TABLE_SYSFILEREFERENCE = 'sys_file_reference';
    private const TABLE_SYSFILE = 'sys_file';

    public function __construct(
        private readonly ConnectionPool $connectionPool
    ) {}
	
    public function findAll(): array {
        $results = $this->connectionPool
            ->getConnectionForTable(self::TABLE_NAME)
            ->select(
                ['*'],
                self::TABLE_NAME
            )->fetchAllAssociative();
		foreach($results as $key => $result){
				if($result['image'] == 1){
					$results[$key]['image'] = $this->getImage($result, 'image');
				}
		}
//		error_log("MyPlant2Repository findAll: " . var_export($results, true), 0);
		return $results;
    }
	
	private function getImage($result, $image): array|null{
        $results = $this->connectionPool
            ->getConnectionForTable(self::TABLE_SYSFILEREFERENCE)
            ->select(
                ['*'],
                self::TABLE_SYSFILEREFERENCE,
				['tablenames' => self::TABLE_NAME,
				 'uid_foreign' => $result['uid'],
				 'fieldname' => $image
				]
            )->fetchAllAssociative();
//		error_log("MyPlant2Repository getImage Uid: " . $result['uid'] . " Image: " . $image . " Results: " . var_export($results, true), 0);
        if(empty($results))
			return null;
		$results = $this->connectionPool
            ->getConnectionForTable(self::TABLE_SYSFILE)
            ->select(
                ['*'],
                self::TABLE_SYSFILE,
				['uid' => $results[0]['uid_local']
				]
            )->fetchAllAssociative();
			$ret['originalResource']['publicUrl'] = 'fileadmin\\' . $results[0]['identifier'];
			$ret['originalResource']['extension'] = $results[0]['extension'];
			$ret['originalResource']['mime_type'] = $results[0]['mime_type'];
			$ret['originalResource']['name'] = $results[0]['name'];
//		error_log("MyPlant2Repository getImage Ret: " . var_export($ret, true), 0);
		return $ret;
	}
}