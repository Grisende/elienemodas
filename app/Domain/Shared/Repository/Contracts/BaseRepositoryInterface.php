<?php

namespace App\Domain\Shared\Repository\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function findAll(Model $model, int $page): array;

    public function count(Model $model): int;

    public function insert(Model $model, array $data): void;

    public function findBy(Model $model, string $where, string $term): array;

    public function update(Model $model, int $id, array $data): void;

    public function delete(Model $model, int $id): void;
}
