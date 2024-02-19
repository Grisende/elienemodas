<?php

namespace App\Domain\Shared\Application;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class GetDataByTerm
{
    public function getDataById(Model $entity, BaseRepositoryInterface $repository, string $where, string $term): array
    {
        return $repository->findBy($entity, $where, $term);
    }
}
