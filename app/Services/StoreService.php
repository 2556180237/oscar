<?php

namespace App\Services;

use App\Repositories\StoreRepository;

class StoreService
{
    protected $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function getAllStores(string $relation)
    {
        return $this->storeRepository->getAllWithRelations([$relation]);
    }

    public function createStore(array $data)
    {
        return $this->storeRepository->create($data);
    }

    public function updateStore($storeId, array $data)
    {
        $store = $this->storeRepository->getById($storeId);

        if (!$store) {
            return null;
        }

        return $this->storeRepository->update($store, $data);
    }
}

