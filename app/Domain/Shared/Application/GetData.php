<?php

namespace App\Domain\Shared\Application;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class GetData
{

    public function getData(Model $entity, BaseRepositoryInterface $repository, int $page): array
    {
        return $repository->findAll($entity, $page);
    }

    public function countData(Model $entity, BaseRepositoryInterface $repository): int
    {
        return $repository->count($entity);
    }

}
