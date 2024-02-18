<?php

namespace App\Domain\Application\Clients;

use App\Domain\Entity\Clients;
use App\Domain\Repository\Contracts\ClientsRepositoryInterface;

class GetClients
{

    public function __construct(
        protected readonly ClientsRepositoryInterface $repository,
        protected readonly Clients                    $entity
    )
    {
    }

    public function getData(int $page): array
    {
        return array_map(function ($data) {
            return [
                'id' => $data['client_id'],
                'name' => $data['client_name'],
                'phone' => $data['client_phone']
            ];
        }, $this->repository->findAll($this->entity, $page));
    }

    public function countData(): int
    {
        return $this->repository->count($this->entity);
    }

}
