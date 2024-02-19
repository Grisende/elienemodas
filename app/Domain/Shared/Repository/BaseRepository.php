<?php

namespace App\Domain\Shared\Repository;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    public function findAll(Model $model, int $page): array
    {
        return $model::all()->forPage($page, 5)->toArray();
    }

    public function count(Model $model): int
    {
        return $model::all()->count();
    }

    public function insert(Model $model, array $data): void
    {
        $model::query()->insert($data);
    }

    public function findBy(Model $model, string $where, string $term): array
    {
        return $model::all()->where($where, '=', $term)->toArray();
    }

    public function update(Model $model, int $id, array $data): void
    {
        $model::query()->where('id', '=', $id)->update($data);
    }

    public function delete(Model $model, int $id): void
    {
        $model::destroy([$id]);
    }
}
